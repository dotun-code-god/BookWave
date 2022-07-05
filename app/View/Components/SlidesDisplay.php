<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SlidesDisplay extends Component
{
    public $heading;
    public $paragraph;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($heading, $paragraph)
    {
        $this->heading = $heading;
        $this->paragraph = $paragraph;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slides-display');
    }
}
