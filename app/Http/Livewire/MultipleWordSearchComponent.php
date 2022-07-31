<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;
use Livewire\WithPagination;

class MultipleWordSearchComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;
    public $multipleWordSearch, $multipleWordSearchTwo, $multipleWordSearchThree;

    public $multipleWordSearchTabTwo;
    public $multipleWordSearchTabThree;

    public $tabStatus = 'tabOne';


    public function tabchnage($value)
    {
        $this->tabStatus = $value;
    }

    public function render()
    {
        $allData = collect([]);
        if ($this->multipleWordSearch != null || $this->multipleWordSearchTwo != null || $this->multipleWordSearchThree != null) {
            if ($this->multipleWordSearch != null) {
                $multiple_words_search = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleWordSearch . '%')->get();
                foreach ($multiple_words_search as $result) {
                    $allData->push($result);
                }
            }
            if ($this->multipleWordSearchTwo != null) {
                $multiple_words_search2 = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleWordSearchTwo . '%')->get();
                foreach ($multiple_words_search2 as $result2) {
                    $allData->push($result2);
                }
            }
            if ($this->multipleWordSearchThree != null) {
                $multiple_words_search3 = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleWordSearchThree . '%')->get();
                foreach ($multiple_words_search3 as $result3) {
                    $allData->push($result3);
                }
            }
        } else {
            $multiple_words_searchall = AyatWord::all();
            foreach ($multiple_words_searchall as $resultall) {
                $allData->push($resultall);
            }
        }

        $multiple_words_search = $allData->sortBy('surah_no')->paginate($this->sortingValue);


        return view('livewire.multiple-word-search-component', ['multiple_words_search' => $multiple_words_search])->layout('layouts.base');
    }
}
