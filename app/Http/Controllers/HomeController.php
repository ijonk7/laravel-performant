<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // $months = Order::select('created_at')->get()->groupBy(function ($item) {
        //                                                 return Carbon::parse($item->created_at)->format('n');
        //                                             })->sortKeys()->map(function ($item) {
        //                                                 return $item->count();
        //                                             })->all();

        $collectionA = collect();

        $joinChunks = Order::select('created_at')->chunk(10000, function ($orders) use ($collectionA) {
            foreach ($orders as $order) {
                $collectionA->push($order);
            }
        });

        // dump($joinChunks);

        $months = $collectionA->groupBy(function ($item) {
                                return Carbon::parse($item->created_at)->format('n');
                            })->sortKeys()->map(function ($item) {
                                return $item->count();
                            })->all();

        // dump($months);

        return view('welcome', [
            'months' => $months
        ]);
    }
}
