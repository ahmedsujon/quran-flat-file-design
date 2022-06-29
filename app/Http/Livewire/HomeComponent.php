<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class HomeComponent extends Component
{

    public $sortingValue = 10, $searchTerm;

    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base');
    }
}
