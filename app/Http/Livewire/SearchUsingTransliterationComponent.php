<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class SearchUsingTransliterationComponent extends Component
{
    public $sortingValue = 10, $searchTerm;
    public $searchUsingTransliteration;

    public function render()
    {
        $search_using_translitaration = AyatWord::where('transliteration_word', 'like', '%'.$this->searchUsingTransliteration.'%')
        ->paginate($this->sortingValue);

        return view('livewire.search-using-transliteration-component', ['search_using_translitaration'=>$search_using_translitaration])->layout('layouts.base');
    }
}
