<?php

namespace App\Http\Livewire\Home;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Filter extends Component
{
    public $product;
    public $country;
    public $ageFirst;
    public $ageSecond;
    public $dateFirst;
    public $dateSecond;
    public $filterProduct;

    public function render()
    {
        return view('livewire.home.filter');
    }

    public function filter()
    {
        // $this->reset(['filterProduct']);

        if ($this->product || $this->country || $this->ageFirst || $this->ageSecond || $this->dateFirst || $this->dateSecond) {
            $this->validate([
                'ageFirst' => 'nullable|required_with:ageSecond|numeric|lt:ageSecond',
                'ageSecond' => 'nullable|required_with:ageFirst|numeric|gt:ageFirst',
                'dateFirst' => 'nullable|required_with:dateSecond|date|before:dateSecond',
                'dateSecond' => 'nullable|required_with:dateFirst|date|after:dateFirst'
            ]);

            $collectionA = collect();

            Order::whereHas('customer', function (Builder $query) {
                $query->whereBetween('age', [$this->ageFirst, $this->ageSecond])->orWhere('country', $this->country);
            })->orWhere('product_id', $this->product)->orWhereBetween('created_at', [$this->dateFirst, $this->dateSecond])->select('created_at')->chunk(10000, function ($orders) use ($collectionA) {
                foreach ($orders as $order) {
                    $collectionA->push($order);
                }
            });

            $this->filterProduct = $collectionA->groupBy(function ($item) {
                                    return Carbon::parse($item->created_at)->format('n');
                                })->sortKeys()->map(function ($item) {
                                    return $item->count();
                                })->all();

            $this->emit('filterReport', $this->filterProduct);
        } else {
            $this->emit('filterAllReport');
        }
    }
}
