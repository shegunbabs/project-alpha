<?php

namespace App\Http\Livewire\Widgets;

use Carbon\Carbon;
use Livewire\Component;

class Calendar extends Component
{
    public $markers;
    public $today;
    public $calendarMonth;

    public function mount($markers = [])
    {
        $dateArray = getdate();
        $month = $dateArray['month'];
        $year = $dateArray['year'];
        $this->markers = $markers;
        $this->today = today();
        $this->calendarMonth = new Carbon("first day of $month $year");
    }

    public function render()
    {
        return view('widgets.calendar');
    }
}
