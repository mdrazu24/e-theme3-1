<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Product extends Component
{

    public $hasTime;
    public $noStock;
    public $img;

    public function __construct($hasTime = false, $noStock = false, $img = "images/food1.webp")
    {

        $this->hasTime = $hasTime;
        $this->noStock = $noStock;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product');
    }
}
