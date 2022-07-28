<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;
use Livewire\WithPagination;

class SearchUsingEnglishWordComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;

    public $searchUsingEnglishWord;
    public $searchUsingEnglishWordTabTwo;
    public $searchUsingEnglishWordTabThree;

    public $tabStatus = 'tabOne';

    public function tabchnage($value)
    {
        $this->tabStatus = $value;
    }

    public function render()
    {
        $search_using_english_word = AyatWord::where('word_sub_category', 'like', '%'.$this->searchUsingEnglishWord.'%')
        ->paginate($this->sortingValue);

        $search_using_english_word_tab_two = AyatWord::where('word_sub_category', 'like', '%'.$this->searchUsingEnglishWordTabTwo.'%')
        ->paginate($this->sortingValue);

        $search_using_english_word_tab_three = AyatWord::where('word_sub_category', 'like', '%'.$this->searchUsingEnglishWordTabThree.'%')
        ->paginate($this->sortingValue);

        return view('livewire.search-using-english-word-component', [
            'search_using_english_word'=>$search_using_english_word,
            'search_using_english_word_tab_two'=>$search_using_english_word_tab_two,
            'search_using_english_word_tab_three'=>$search_using_english_word_tab_three
            ])->layout('layouts.base');
    }
}
