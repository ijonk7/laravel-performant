<?php

namespace App\Http\Livewire\Home;

use App\Models\Order;
use App\Models\Product;
use App\Models\VwAllReport;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Index extends Component
{
    public $allReport;

    public function render()
    {
        // $collectionA = collect();

        // Order::select('created_at')->chunk(10000, function ($orders) use ($collectionA) {
        //     foreach ($orders as $order) {
        //         $collectionA->push($order);
        //     }
        // });

        // $this->allReport = $collectionA->groupBy(function ($item) {
        //                         return Carbon::parse($item->created_at)->format('n');
        //                     })->sortKeys()->map(function ($item) {
        //                         return $item->count();
        //                     })->all();

        $this->allReport = VwAllReport::all()->map(function ($item, $key) {
            return $item->orders;
        })->all();

        return view('livewire.home.index');
    }
}
