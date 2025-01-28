<?php

namespace App\View\Components;

use Closure;
use App\Models\Banner;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BannerNoHome extends Component
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
