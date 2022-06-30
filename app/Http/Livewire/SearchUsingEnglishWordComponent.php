<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class SearchUsingEnglishWordComponent extends Component
{
    public function render()
    {
        $search_using_english_word = AyatWord::get();
        return view('livewire.search-using-english-word-component', ['search_using_english_word'=>$search_using_english_word])->layout('layouts.base');
    }
}
