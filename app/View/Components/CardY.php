<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardY extends Component
{

    public string $title;
    public string $subtitle;
    public string $image;
    public string $to;

    public function __construct($title, $subtitle, $image, $to)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->image = $image;
        $this->to = $to;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-y');
    }
}