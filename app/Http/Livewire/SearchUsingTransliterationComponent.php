<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;
use Livewire\WithPagination;

class SearchUsingTransliterationComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;

    public $searchUsingTransliterationOne;
    public $searchUsingTransliterationTabTwoOne, $searchUsingTransliterationTabTwoTwo, $searchUsingTransliterationTabTwoThree;
    public $searchUsingTransliterationTabThreeOne, $searchUsingTransliterationTabThreeTwo, $searchUsingTransliterationTabThreeThree;

    public $tabStatus = 'tabOne';

    public function tabchnage($value)
    {
        $this->tabStatus = $value;
    }
    public function render()
    {
        $search_using_translitaration = AyatWord::where('transliteration_word', 'like', '%'.$this->searchUsingTransliteration.'%')
        ->paginate($this->sortingValue);

        $search_using_translitaration_tab_two = AyatWord::where('transliteration_word', 'like', '%'.$this->searchUsingTransliterationTabTwo.'%')
        ->paginate($this->sortingValue);

        $search_using_translitaration_tab_three = AyatWord::where('transliteration_word', 'like', '%'.$this->searchUsingTransliterationTabThree.'%')
        ->paginate($this->sortingValue);

        return view('livewire.search-using-transliteration-component', 
        ['search_using_translitaration'=>$search_using_translitaration,
        'search_using_translitaration_tab_two'=>$search_using_translitaration_tab_two,
        'search_using_translitaration_tab_three'=>$search_using_translitaration_tab_three])
        ->layout('layouts.base');
    }
}
