<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class MultipleOrWordSearchComponent extends Component
{
    public function render()
    {
        $multiple_or_words_search = AyatWord::get();
        return view('livewire.multiple-or-word-search-component', ['multiple_or_words_search'=>$multiple_or_words_search]);
    }
}
