<?php

namespace App\Http\Livewire\Home;

use App\Models\VwAllReport;
use Livewire\Component;

class Index extends Component
{
    public $allReport;

    public function render()
    {
        $this->allReport = VwAllReport::all()->map(function ($item, $key) {
            return $item->orders;
        })->all();

        return view('livewire.home.index');
    }
}
