<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class DisplayQuraArabicComponent extends Component
{
    public function render()
    {
        $display_quran_arabic = AyatWord::get();
        return view('livewire.display-qura-arabic-component', ['display_quran_arabic'=>$display_quran_arabic])->layout('layouts.base');
    }
}
