<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class SearchDropDown extends Component
{
    public function render()
    {
        $search_dropdowns = AyatWord::get();
        return view('livewire.search-drop-down', ['search_dropdowns'=>$search_dropdowns])->layout('layouts.base');
    }
}
