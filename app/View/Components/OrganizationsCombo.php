<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\Organization;

class OrganizationsCombo extends Component
{
    /**
     * Create a new component instance.
     */
    private $selected;
    public function __construct($selected=0)
    {
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = Organization::all();
        return view('components.organizations-combo', ['data'=>$data, 'selected'=>$this->selected]);
    }
}
