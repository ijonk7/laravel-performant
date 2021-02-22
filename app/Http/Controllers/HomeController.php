<?php

namespace App\Http\Controllers;

use App\Models\VwAllReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $checkRedisExist = Redis::exists('index_chart');

        if ($checkRedisExist) {
            $index_chart = Redis::get('index_chart');
            $allReport = json_decode($index_chart);
        } else {
            $allReport = VwAllReport::all()->map(function ($item, $key) {
                return $item->orders;
            })->all();

            Redis::set('index_chart', json_encode($allReport));
        }

        return view('welcome', [
            'allReport' => $allReport
        ]);
    }

    public function login()
    {
        return view('home');
    }
}
