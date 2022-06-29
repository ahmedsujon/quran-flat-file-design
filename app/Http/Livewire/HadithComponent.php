<?php

namespace App\Http\Livewire;

use App\Models\Hadith;
use Livewire\Component;

class HadithComponent extends Component
{
    public function render()
    {
        $ayat_words = Hadith::where('arabic_root_word', 'like', '%'.$this->searchTerm.'%')->where('normalize_word', 'like', '%'.$this->searchTerm.'%')->where('Transliteration_word', 'like', '%'.$this->searchTerm.'%')->where('english_word', 'like', '%'.$this->searchTerm.'%')->get();
        
        return view('livewire.hadith-component')->layout('layouts.base');
    }
}
