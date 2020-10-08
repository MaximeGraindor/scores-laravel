<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PlayedGames extends Component
{

    public $currentDate;
    public $matches;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $currentDate, $matches)
    {
        $this->currentDate = $currentDate;
        $this->matches = $matches;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.played-games');
    }
}
