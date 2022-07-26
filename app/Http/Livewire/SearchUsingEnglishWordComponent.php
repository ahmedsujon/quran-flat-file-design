<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class SearchUsingEnglishWordComponent extends Component
{
    public $sortingValue = 10, $searchTerm;
    public $searchUsingEnglishWord;

    public function render()
    {
        $search_using_english_word = AyatWord::where('word_sub_category', 'like', '%'.$this->searchUsingEnglishWord.'%')
        ->paginate($this->sortingValue);

        return view('livewire.search-using-english-word-component', ['search_using_english_word'=>$search_using_english_word])->layout('layouts.base');
    }
}
