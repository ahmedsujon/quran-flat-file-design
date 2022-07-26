<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class DisplayCompleteQuraCategoryComponent extends Component
{
    public $sortingValue = 10, $searchTerm;
    public $displayCompleteQuraCategory;

    public function render()
    {
        $display_complete_quran_category = AyatWord::where('word_sub_category', 'like', '%'.$this->displayCompleteQuraCategory.'%')
        ->paginate($this->sortingValue);

        return view('livewire.display-complete-qura-category-component',['display_complete_quran_category'=>$display_complete_quran_category])->layout('layouts.base');
    }
}
