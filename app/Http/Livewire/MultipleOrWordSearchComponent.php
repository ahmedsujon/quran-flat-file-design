<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use App\Models\SuraAyat;
use Livewire\Component;
use Livewire\WithPagination;

class MultipleOrWordSearchComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;
    public $multipleOrWordSearchOne, $multipleOrWordSearchtwo;
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
        $allData = collect([]);
        if ($this->multipleOrWordSearchOne != null || $this->multipleOrWordSearchtwo != null) {
            if ($this->multipleOrWordSearchOne != null) {
                $multiple_words_search = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleOrWordSearchOne . '%')->get();
                foreach ($multiple_words_search as $result) {
                    $allData->push($result);
                }
            }
            if ($this->multipleOrWordSearchtwo != null) {
                $multiple_words_search2 = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleOrWordSearchtwo . '%')->get();
                foreach ($multiple_words_search2 as $result2) {
                    $allData->push($result2);
                }
            }
        } else {
            $multiple_words_searchall = AyatWord::all();
            foreach ($multiple_words_searchall as $resultall) {
                $allData->push($resultall);
            }
        }
        $multiple_or_words_search = $allData->sortBy('surah_no')->paginate($this->sortingValue);

        // tab two
        $allDataTwo = collect([]);
        if ($this->multipleOrWordSearchTabTwoOne != null || $this->multipleOrWordSearchTabTwoTwo != null || $this->multipleWordSearchThree != null) {
            if ($this->multipleOrWordSearchTabTwoOne != null) {
                $multiple_or_words_search_tab2 = AyatWord::where('normalize_word', 'like', '%' . $this->multipleOrWordSearchTabTwoOne . '%')->get();
                foreach ($multiple_or_words_search_tab2 as $result) {
                    $allDataTwo->push($result);
                }
            }
            if ($this->multipleOrWordSearchTabTwoTwo != null) {
                $multiple_or_words_search2_tab2 = AyatWord::where('normalize_word', 'like', '%' . $this->multipleOrWordSearchTabTwoTwo . '%')->get();
                foreach ($multiple_or_words_search2_tab2 as $result2) {
                    $allDataTwo->push($result2);
                }
            }
            if ($this->multipleOrWordSearchTabTwoThree != null) {
                $multiple_or_words_search3_tab2 = AyatWord::where('normalize_word', 'like', '%' . $this->multipleOrWordSearchTabTwoThree . '%')->get();
                foreach ($multiple_or_words_search3_tab2 as $result3) {
                    $allDataTwo->push($result3);
                }
            }
        } else {
            $multiple_or_words_searchall_tab2 = AyatWord::all();
            foreach ($multiple_or_words_searchall_tab2 as $resultall) {
                $allDataTwo->push($resultall);
            }
        }
        $multiple_or_words_search_tab_two = $allDataTwo->sortBy('normalize_word')->paginate($this->sortingValue);

        // tab three
        $allDataThree = collect([]);
        if ($this->multipleOrWordSearchTabThreeOne != null || $this->multipleOrWordSearchTabTwoTwo != null || $this->multipleWordSearchThree != null) {
            if ($this->multipleOrWordSearchTabThreeOne != null) {
                $multiple_or_words_search_tab3_1 = SuraAyat::where('ayat_arabic_description', 'like', '%' . $this->multipleOrWordSearchTabThreeOne . '%')->get();
                foreach ($multiple_or_words_search_tab3_1 as $result) {
                    $allDataThree->push($result);
                }
            }
            if ($this->multipleOrWordSearchTabThreeTwo != null) {
                $multiple_or_words_search2_tab3_2 = SuraAyat::where('ayat_arabic_description', 'like', '%' . $this->multipleOrWordSearchTabThreeTwo . '%')->get();
                foreach ($multiple_or_words_search2_tab3_2 as $result2) {
                    $allDataThree->push($result2);
                }
            }
            if ($this->multipleOrWordSearchTabThreeThree != null) {
                $multiple_or_words_search3_tab3_3 = SuraAyat::where('ayat_arabic_description', 'like', '%' . $this->multipleOrWordSearchTabThreeThree . '%')->get();
                foreach ($multiple_or_words_search3_tab3_3 as $result3) {
                    $allDataThree->push($result3);
                }
            }
        } else {
            $multiple_or_words_searchall_tab3 = SuraAyat::all();
            foreach ($multiple_or_words_searchall_tab3 as $resultall) {
                $allDataThree->push($resultall);
            }
        }
        $multiple_or_words_search_tab_three = $allDataThree->sortBy('surah_number')->paginate($this->sortingValue);
        return view('livewire.multiple-or-word-search-component', ['multiple_or_words_search'=>$multiple_or_words_search, 'multiple_or_words_search_tab_two'=>$multiple_or_words_search_tab_two, 'multiple_or_words_search_tab_three'=>$multiple_or_words_search_tab_three])->layout('layouts.base');
    }
}
