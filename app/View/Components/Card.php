<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    // public $percent;
    /**
     *
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    // public function __construct($percent)
    // {
    //     $this->percent = $percent;
    // }


    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.card');
    }
}
