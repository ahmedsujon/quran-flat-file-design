<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class MultipleWordSearchComponent extends Component
{
    public function render()
    {
        $multiple_words_search = AyatWord::get();
        return view('livewire.multiple-word-search-component', ['multiple_words_search'=>$multiple_words_search])->layout('layouts.base');
    }
}
