<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Standings extends Component
{

    public $teamsStats;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($teamsStats)
    {
        $this->teamsStats = $teamsStats;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.standings');
    }
}
