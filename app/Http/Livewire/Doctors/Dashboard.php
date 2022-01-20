<?php

namespace App\Http\Livewire\Doctors;

use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{


    public function calendar()
    {
        $today = today();
        $startDay = 1;
        $endDay = $today->daysInMonth;
    }



    public function render()
    {
        return view('doctors.dashboard')->layout('layouts.doctor.dashboard');
    }
}
