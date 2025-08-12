<?php

namespace App\Livewire\Home;

use App\Models\Plan;
use Livewire\Attributes\Computed;
use Livewire\Component;

class PlanHome extends Component
{


    #[Computed]
    public function getPlans()
    {
        return Plan::all();
    }
    public function render()
    {
        return view('livewire.home.planes-home');
    }
}
