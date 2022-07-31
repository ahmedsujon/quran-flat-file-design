<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;
use Livewire\WithPagination;

class SearchDropDown extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;
    public $dropdownsearch;

    public function render()
    {
        $search_dropdowns = AyatWord::where('word_sub_category', 'like', '%' . $this->dropdownsearch . '%')->paginate($this->sortingValue);
        return view('livewire.search-drop-down', ['search_dropdowns'=>$search_dropdowns])->layout('layouts.base');
    }
}
