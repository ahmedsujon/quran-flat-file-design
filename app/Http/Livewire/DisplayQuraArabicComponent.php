<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class DisplayQuraArabicComponent extends Component
{
    public $sortingValue = 10, $searchTerm;
    public $displayQuraArabic;

    public function render()
    {
        
        $display_quran_arabic = AyatWord::where('arabic_root_word', 'like', '%'.$this->displayQuraArabic.'%')
        ->paginate($this->sortingValue);

        return view('livewire.display-qura-arabic-component', ['display_quran_arabic'=>$display_quran_arabic])->layout('layouts.base');
    }
}
