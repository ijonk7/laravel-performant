<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\VwAllReport;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
