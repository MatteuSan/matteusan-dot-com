<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Language extends Component
{

    public $code;
    public $language;

    public function __construct($code, $language)
    {
        $this->code = $code;
        $this->language = $language;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.language');
    }
}
