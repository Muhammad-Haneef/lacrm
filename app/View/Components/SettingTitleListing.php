<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SettingTitleListing extends Component
{
    /**
     * Create a new component instance.
     */
    protected $dtData;
    public function __construct($dtData=[])
    {
        $this->dtData = $dtData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.setting-title-listing', ['data'=>$this->dtData]);
    }
}
