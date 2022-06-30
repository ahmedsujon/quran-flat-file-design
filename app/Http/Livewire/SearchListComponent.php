<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchListComponent extends Component
{
    public function render()
    {
        return view('livewire.search-list-component')->layout('layouts.base');
    }
}
