<?php

namespace App\View\Components;

use Closure;
use App\Models\Profile;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public $profile;
    public function __construct()
    {
        //
        $this->profile = Profile::find('1');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
