<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BrowsePage extends Component
{
    public $name;
    public $nameInFull;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $nameInFull)
    {
        $this->name = $name;
        $this->nameInFull = $nameInFull;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.browse-page');
    }
}
