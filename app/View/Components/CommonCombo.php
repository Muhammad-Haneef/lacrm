<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use Illuminate\Support\Facades\DB;

class CommonCombo extends Component
{
    /**
     * Create a new component instance.
     */
    private $table='';
    private $label='';
    private $ref='';
    private $selected='';
    public function __construct($relatedto, $label, $ref, $selected=0)
    {
        $this->table = $relatedto;
        $this->label = $label;
        $this->ref = $ref;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data=[];
        if(!empty($this->table)){
            $data =  DB::table($this->table)->get();
        }
        return view('components.common-combo', ['data'=>$data, 'label'=>$this->label, 'ref'=>$this->ref, 'selected'=>$this->selected]);
    }
}
