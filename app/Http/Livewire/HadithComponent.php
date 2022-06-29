<?php

namespace App\Http\Livewire;

use App\Models\Hadith;
use Livewire\Component;

class HadithComponent extends Component
{
    public $sortingValue = 10, $searchTerm;

    public function render()
    {
        $hadith_references = Hadith::where('hadith_description', 'like', '%'.$this->searchTerm.'%')->get();
        
        return view('livewire.hadith-component', ['hadith_references'=>$hadith_references])->layout('layouts.base');
    }
}
