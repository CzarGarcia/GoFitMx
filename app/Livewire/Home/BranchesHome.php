<?php

namespace App\Livewire\Home;

use App\Models\Branch;
use Livewire\Attributes\Computed;
use Livewire\Component;

class BranchesHome extends Component
{


    #[Computed]
    public function getBranches()
    {
        $branches = Branch::all();
        return $branches;
    }

    public function render()
    {
        return view('livewire.home.branches-home');
    }
}
