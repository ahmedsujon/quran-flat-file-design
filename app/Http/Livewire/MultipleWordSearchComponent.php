<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class MultipleWordSearchComponent extends Component
{
    public $sortingValue = 10, $searchTerm;
    public $multipleWordSearch, $multipleWordSearchTwo,$multipleWordSearchThree;


    public function render()
    {
        $multiple_words_search = AyatWord::where('arabic_root_word', 'like', '%'.$this->multipleWordSearch.'%')
        ->where(function($query){
            $query->where('arabic_root_word', 'like', '%'.$this->multipleWordSearchTwo.'%');
            $query->orWhere('arabic_root_word', 'like', '%'.$this->multipleWordSearchThree.'%');
        })
        ->paginate($this->sortingValue);
        
        return view('livewire.multiple-word-search-component', ['multiple_words_search'=>$multiple_words_search])->layout('layouts.base');
    }
}
