<?php

namespace App\Livewire\Home;

use App\Models\Banner;
use Livewire\Attributes\Computed;
use Livewire\Component;

class BannerHome extends Component
{
    /**
     * Get the banner data.
     *
     * @return void
     */
    #[Computed]
    public function getBanner()
    {
        $banners =  Banner::active()
            ->orderBy('order', 'asc')
            ->get();

        return $banners;
    }


    public function render()
    {
        return view('livewire.home.banner-home');
    }
}
