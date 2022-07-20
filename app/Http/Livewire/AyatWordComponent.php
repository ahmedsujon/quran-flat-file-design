<?php

namespace App\Http\Livewire;

use App\Imports\AyatWordImport;
use App\Models\AyatWord;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class AyatWordComponent extends Component
{
    public $sortingValue = 10, $searchTerm;
    



    public function render()
    {
        $ayat_words = AyatWord::where('arabic_root_word', 'like', '%'.$this->searchTerm.'%')->where('normalize_word', 'like', '%'.$this->searchTerm.'%')->where('Transliteration_word', 'like', '%'.$this->searchTerm.'%')->where('english_word', 'like', '%'.$this->searchTerm.'%')->get();
        return view('livewire.ayat-word-component', ['ayat_words'=>$ayat_words])->layout('layouts.base');
    }
}
