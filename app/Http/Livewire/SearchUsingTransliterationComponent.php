<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class SearchUsingTransliterationComponent extends Component
{
    public function render()
    {
        $search_using_translitaration = AyatWord::get();
        return view('livewire.search-using-transliteration-component', ['search_using_translitaration'=>$search_using_translitaration])->layout('layouts.base');
    }
}
