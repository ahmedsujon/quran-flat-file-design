<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;
use Livewire\WithPagination;

class MultipleOrWordSearchComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;
    public $multipleOrWordSearchone, $multipleOrWordSearchtwo;
    public $multipleOrWordSearchTabTwo;
    public $multipleOrWordSearchTabThree;
    public $tabStatus = 'tabOne';
    public $multipleOrWordSearch;

    public function tabchnage($value)
    {
        $this->tabStatus = $value;
    }

    public function render()
    {

        $multiple_or_words_search = AyatWord::where('arabic_root_word', 'like', '%'.$this->multipleOrWordSearchone.'%')
        ->where('arabic_root_word', 'like', '%'.$this->multipleOrWordSearchtwo.'%')
        ->paginate($this->sortingValue);
        

        $multiple_or_words_search_tab_two = AyatWord::where('arabic_root_word', 'like', '%'.$this->multipleOrWordSearch.'%')
        ->paginate($this->sortingValue);

        $multiple_or_words_search_tab_three = AyatWord::where('arabic_root_word', 'like', '%'.$this->multipleOrWordSearch.'%')
        ->paginate($this->sortingValue);

        return view('livewire.multiple-or-word-search-component', ['multiple_or_words_search'=>$multiple_or_words_search, 'multiple_or_words_search_tab_two'=>$multiple_or_words_search_tab_two, 'multiple_or_words_search_tab_three'=>$multiple_or_words_search_tab_three])->layout('layouts.base');
    }
}
