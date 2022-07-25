<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class SingleSearchComponent extends Component
{
    public $sortingValue = 10, $searchTerm;
    public $singleArabicRootWord;

    public function render()
    {
        $ayat_words = AyatWord::where('arabic_root_word', 'like', '%'.$this->singleArabicRootWord.'%')->get();

        // $ayat_words = AyatWord::get();
        return view('livewire.single-search-component', ['ayat_words'=>$ayat_words])->layout('layouts.base');
    }
}
