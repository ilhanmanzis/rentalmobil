<?php

namespace App\View\Components;

use Closure;
use App\Models\Banner;
use App\Models\Profile;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BannerHome extends Component
{
    /**
     * Create a new component instance.
     */
    public $profile;
    public $banners;
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
