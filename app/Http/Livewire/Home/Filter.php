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
        if ($this->product || $this->country || $this->ageFirst || $this->ageSecond || $this->dateFirst || $this->dateSecond) {
            $this->validate([
                'ageFirst' => 'nullable|required_with:ageSecond|numeric|lte:ageSecond',
                'ageSecond' => 'nullable|required_with:ageFirst|numeric|gte:ageFirst',
                'dateFirst' => 'nullable|required_with:dateSecond|date|before_or_equal:dateSecond',
                'dateSecond' => 'nullable|required_with:dateFirst|date|after_or_equal:dateFirst'
            ]);

            $collection = Order::select(['customer_id','created_at'])
                                ->when($this->product, function ($query) {
                                    return $query->where('product_id', $this->product);
                                })
                                ->when($this->dateFirst, function ($query) {
                                    return $query->whereBetween('created_at', [$this->dateFirst.' 00:00:00', $this->dateSecond.' 23:59:59']);
                                })
                                ->when($this->ageFirst AND $this->country, function ($query) {
                                        return $query->WhereHas('customer', function (Builder $query) {
                                            $query->select(['id','age','country'])->whereBetween('age', [$this->ageFirst, $this->ageSecond])->where('country', $this->country);
                                        });
                                    }, function ($query) {
                                        $query->when($this->ageFirst, function ($query) {
                                            $query->WhereHas('customer', function (Builder $query) {
                                                return $query->select(['id','age'])->whereBetween('age', [$this->ageFirst, $this->ageSecond]);
                                            });
                                        });
                                        $query->when($this->country, function ($query) {
                                            $query->WhereHas('customer', function (Builder $query) {
                                                return $query->select(['id','country'])->where('country', $this->country);
                                            });
                                        });
                                    }
                                )
                                ->get();

            // $this->filterProduct = $collection->groupBy(function ($item) {
            //                         return Carbon::parse($item->created_at)->format('n');
            //                     })->sortKeys()->map(function ($item) {
            //                         return $item->count();
            //                     })->all();

            $this->filterProduct = $collection->groupBy(function ($item) {
                                    return Carbon::parse($item->created_at)->format('n');
                                    })
                                    ->map(function ($item) {
                                        return $item->count();
                                    })
                                    ->union([1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0, 11 => 0, 12 => 0])
                                    ->sortKeys()
                                    ->all();

            // $collection = collect([1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0, 11 => 0, 12 => 0]);
            // $merged = $collection->merge($this->filterProduct);

            // dd($this->filterProduct);
            // dd($merged);



            // $collectionA = collect();

            // Order::whereHas('customer', function (Builder $query) {
            //     $query->whereBetween('age', [$this->ageFirst, $this->ageSecond])->orWhere('country', $this->country);
            // })->orWhere('product_id', $this->product)->orWhereBetween('created_at', [$this->dateFirst, $this->dateSecond])->select('created_at')->chunk(10000, function ($orders) use ($collectionA) {
            //     foreach ($orders as $order) {
            //         $collectionA->push($order);
            //     }
            // });

            // $this->filterProduct = $collectionA->groupBy(function ($item) {
            //                         return Carbon::parse($item->created_at)->format('n');
            //                     })->sortKeys()->map(function ($item) {
            //                         return $item->count();
            //                     })->all();

            $this->emit('filterReport', $this->filterProduct);
        } else {
            $this->emit('filterAllReport');
        }
    }
}
