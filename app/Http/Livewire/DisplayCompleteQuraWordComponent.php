<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class DisplayCompleteQuraWordComponent extends Component
{
    public $sortingValue = 20, $searchTerm;
    public $displayCompleteQuraWord;

    public function render()
    {
        $display_complete_quran_word = AyatWord::where('word_sub_category', 'like', '%'.$this->displayCompleteQuraWord.'%')
        ->paginate($this->sortingValue);

        return view('livewire.display-complete-qura-word-component', ['display_complete_quran_word'=>$display_complete_quran_word])->layout('layouts.base');
    }
}
