<?php

namespace App\View\Components;

use Illuminate\View\Component;

class QuadrasTable extends Component
{
    public $listQuadras;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($listQuadras,$type)
    {
        $this->listQuardas = $listQuadras;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.quadras-table');
    }
}
