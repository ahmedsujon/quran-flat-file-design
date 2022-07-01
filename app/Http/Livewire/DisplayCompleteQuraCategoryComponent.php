<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class DisplayCompleteQuraCategoryComponent extends Component
{
    public function render()
    {
        $display_complete_quran_category = AyatWord::get();
        return view('livewire.display-complete-qura-category-component',['display_complete_quran_category'=>$display_complete_quran_category])->layout('layouts.base');
    }
}
