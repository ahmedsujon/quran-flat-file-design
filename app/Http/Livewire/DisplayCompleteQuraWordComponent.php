<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class DisplayCompleteQuraWordComponent extends Component
{
    public function render()
    {
        $display_complete_quran_word = AyatWord::get();
        return view('livewire.display-complete-qura-word-component', ['display_complete_quran_word'=>$display_complete_quran_word])->layout('layouts.base');
    }
}
