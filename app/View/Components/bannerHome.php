<?php

namespace App\View\Components;

use App\Models\Banner;
use App\Models\Profile;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class bannerHome extends Component
{
    /**
     * Create a new component instance.
     */
    public $banners;
    public $profile;
    public function __construct()
    {
        //
        $this->banners = Banner::all();
        $this->profile = Profile::find('1');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-home');
    }
}
