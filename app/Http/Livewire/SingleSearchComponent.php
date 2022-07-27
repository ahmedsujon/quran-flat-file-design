<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;
use Livewire\WithPagination;

class SingleSearchComponent extends Component
{
    use WithPagination;
    public $sortingValue = 2, $searchTerm;

    public $singleArabicRootWord;
    public $singleArabicRootWordSecenttab;
    public $tabStatus = 'tabOne';


    public function tabchnage($value)
    {
        $this->tabStatus = $value;
    }

    public function render()
    {
        $ayat_words = AyatWord::where('arabic_root_word', 'like', '%' . $this->singleArabicRootWord . '%')->paginate($this->sortingValue);
        $ayat_wordstabtwo = AyatWord::where('arabic_root_word', 'like', '%' . $this->singleArabicRootWordSecenttab . '%')->paginate($this->sortingValue);
        // $ayat_words = AyatWord::get();
        return view('livewire.single-search-component', ['ayat_words' => $ayat_words, 'ayat_wordstabtwo' => $ayat_wordstabtwo])->layout('layouts.base');
    }
}
