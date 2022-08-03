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
    public $searchUsingEnglishWordTabTwoOne, $searchUsingEnglishWordTabTwoTwo, $searchUsingEnglishWordTabTwoThree, $searchUsingEnglishWordTabTwoFour;
    public $searchUsingEnglishWordTabThreeOne, $searchUsingEnglishWordTabThreeTwo, $searchUsingEnglishWordTabThreeThree;

    public $tabStatus = 'tabOne';

    public function tabchnage($value)
    {
        $this->tabStatus = $value;
    }

    public function render()
    {
        $search_using_english_word = AyatWord::where('english_word', 'like', '%'.$this->searchUsingEnglishWord.'%')
        ->paginate($this->sortingValue);

        // tab two
        $allDataTwo = collect([]);
        if ($this->searchUsingEnglishWordTabTwoOne != null || $this->searchUsingEnglishWordTabTwoTwo != null || $this->searchUsingEnglishWordTabTwoThree != null || $this->searchUsingEnglishWordTabTwoFour != null) {
            if ($this->searchUsingEnglishWordTabTwoOne != null) {
                $search_using_transliteration_two = AyatWord::where('english_word', 'like', '%' . $this->searchUsingEnglishWordTabTwoOne . '%')->get();
                foreach ($search_using_transliteration_two as $result) {
                    $allDataTwo->push($result);
                }
            }
            if ($this->searchUsingEnglishWordTabTwoTwo != null) {
                $search_using_transliteration_two2 = AyatWord::where('english_word', 'like', '%' . $this->searchUsingEnglishWordTabTwoTwo . '%')->get();
                foreach ($search_using_transliteration_two2 as $result2) {
                    $allDataTwo->push($result2);
                }
            }
            if ($this->searchUsingEnglishWordTabTwoThree != null) {
                $search_using_transliteration_two3 = AyatWord::where('english_word', 'like', '%' . $this->searchUsingEnglishWordTabTwoThree . '%')->get();
                foreach ($search_using_transliteration_two3 as $result3) {
                    $allDataTwo->push($result3);
                }
            }
            if ($this->searchUsingEnglishWordTabTwoFour != null) {
                $search_using_transliteration_two4 = AyatWord::where('english_word', 'like', '%' . $this->searchUsingEnglishWordTabTwoFour . '%')->get();
                foreach ($search_using_transliteration_two4 as $result4) {
                    $allDataTwo->push($result4);
                }
            }
        } else {
            $search_using_transla_searchall = AyatWord::all();
            foreach ($search_using_transla_searchall as $resultall) {
                $allDataTwo->push($resultall);
            }
        }
        $search_using_english_word_tab_two = $allDataTwo->sortBy('surah_no')->paginate($this->sortingValue);

        $search_using_english_word_tab_three = AyatWord::where('english_word', 'like', '%' . $this->searchUsingEnglishWordTabThreeOne . '%')->where('english_word', 'like', '%' . $this->searchUsingEnglishWordTabThreeTwo . '%')->where('english_word', 'like', '%' . $this->searchUsingEnglishWordTabThreeThree . '%')->orderBy('surah_no', 'ASC')->paginate($this->sortingValue);
        return view('livewire.search-using-english-word-component', [
            'search_using_english_word'=>$search_using_english_word,
            'search_using_english_word_tab_two'=>$search_using_english_word_tab_two,
            'search_using_english_word_tab_three'=>$search_using_english_word_tab_three
            ])->layout('layouts.base');
    }
}
