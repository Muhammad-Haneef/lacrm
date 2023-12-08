<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SettingWidget extends Component
{
    /**
     * Create a new component instance.
     */

    /*
    style 1
    public function __construct(
        public $link="settings",
        public $icon="bin",
        public $title="Setting Widget",
        public $des="Simple Description"
    ){}
    */

    // style 2
    public $data;
    public function __construct($data){
        $this->data=$data;
    }    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        /*
        style 1
        return view('components.setting-widget');
        */

        // style 2
        return view('components.setting-widget', ['data'=>$this->data]);
    }
}
