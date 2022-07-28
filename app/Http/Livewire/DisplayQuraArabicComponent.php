<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayQuraArabicComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;
    public $displayQuraArabic;
    public $displayQuraArabicTabTwo;
    public $tabStatus = 'tabOne';

    public function tabchnage($value)
    {
        $this->tabStatus = $value;
    }

    public function render()
    {
        
        $display_quran_arabic = AyatWord::where('arabic_root_word', 'like', '%'.$this->displayQuraArabic.'%')
        ->paginate($this->sortingValue);
        $display_quran_arabic_tab_two = AyatWord::where('arabic_root_word', 'like', '%'.$this->displayQuraArabicTabTwo.'%')
        ->paginate($this->sortingValue);

        return view('livewire.display-qura-arabic-component', ['display_quran_arabic'=>$display_quran_arabic, 'display_quran_arabic_tab_two'=>$display_quran_arabic_tab_two])->layout('layouts.base');
    }
}
