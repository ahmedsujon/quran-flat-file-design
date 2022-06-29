<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class AyatWordComponent extends Component
{
    public function render()
    {
        $ayat_words = AyatWord::where('arabic_root_word', 'like', '%'.$this->searchTerm.'%')->where('normalize_word', 'like', '%'.$this->searchTerm.'%')->where('Transliteration_word', 'like', '%'.$this->searchTerm.'%')->where('english_word', 'like', '%'.$this->searchTerm.'%')->get();
        return view('livewire.ayat-word-component', ['ayat_words'=>$ayat_words])->layout('layouts.base');
    }
}
