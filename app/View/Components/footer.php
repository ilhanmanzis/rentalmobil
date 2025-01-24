<?php

namespace App\View\Components;

use Closure;
use App\Models\Sosmed;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{
    /**
     * Create a new component instance.
     */
    public $sosmed;
    public function __construct()
    {
        //
        $this->sosmed = Sosmed::find('1');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
