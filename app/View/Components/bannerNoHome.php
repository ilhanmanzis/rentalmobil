<?php

namespace App\View\Components;

use App\Models\Banner;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class bannerNoHome extends Component
{
    /**
     * Create a new component instance.
     */
    public $banners;
    public function __construct()
    {
        //
        $this->banners = Banner::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-no-home');
    }
}
