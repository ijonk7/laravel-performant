<?php

namespace App\Http\Livewire\Home;

use App\Models\Order;
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
        $this->reset(['filterProduct']);

        if ($this->product) {
            $collectionA = collect();

            Order::where('product_id', $this->product)->select('created_at')->chunk(10000, function ($orders) use ($collectionA) {
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
