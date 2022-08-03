<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use App\Models\SuraAyat;
use Livewire\Component;
use Livewire\WithPagination;

class MultipleOrWordSearchComponent extends Component
{
    use WithPagination;
    public $sortingValue = 20, $searchTerm;
    public $multipleOrWordSearchOne, $multipleOrWordSearchtwo, $multipleOrWordSearchthree;
    public $multipleOrWordSearchTabTwoOne, $multipleOrWordSearchTabTwoTwo, $multipleOrWordSearchTabTwoThree;
    public $multipleOrWordSearchTabThreeOne, $multipleOrWordSearchTabThreeTwo, $multipleOrWordSearchTabThreeThree;
    public $tabStatus = 'tabOne';
    public $multipleWordSearchThree;

    public function tabchnage($value)
    {
        $this->tabStatus = $value;
    }

    public function render()
    {
        $multiple_or_words_search = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleOrWordSearchOne . '%')->where('arabic_root_word', 'like', '%' . $this->multipleOrWordSearchtwo . '%')->where('arabic_root_word', 'like', '%' . $this->multipleOrWordSearchthree . '%')->orderBy('surah_no', 'ASC')->paginate($this->sortingValue);


        $multiple_or_words_search_tab_two = AyatWord::where('normalize_word', 'like', '%' . $this->multipleOrWordSearchTabTwoOne . '%')->where('normalize_word', 'like', '%' . $this->multipleOrWordSearchTabTwoTwo . '%')->where('normalize_word', 'like', '%' . $this->multipleOrWordSearchTabTwoThree . '%')->orderBy('surah_no', 'ASC')->paginate($this->sortingValue);


        $multiple_or_words_search_tab_three = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleOrWordSearchTabThreeOne . '%')->where('arabic_root_word', 'like', '%' . $this->multipleOrWordSearchTabThreeTwo . '%')->where('arabic_root_word', 'like', '%' . $this->multipleOrWordSearchTabThreeThree . '%')->orderBy('surah_no', 'ASC')->paginate($this->sortingValue);

        
        return view('livewire.multiple-or-word-search-component', ['multiple_or_words_search' => $multiple_or_words_search, 'multiple_or_words_search_tab_two' => $multiple_or_words_search_tab_two, 'multiple_or_words_search_tab_three' => $multiple_or_words_search_tab_three])->layout('layouts.base');
    }
}
