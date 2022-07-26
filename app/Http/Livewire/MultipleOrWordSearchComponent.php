<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;

class MultipleOrWordSearchComponent extends Component
{
    public $sortingValue = 10, $searchTerm;
    public $multipleOrWordSearch;

    public function render()
    {
        $multiple_or_words_search = AyatWord::where('arabic_root_word', 'like', '%'.$this->multipleOrWordSearch.'%')
        ->paginate($this->sortingValue);

        return view('livewire.multiple-or-word-search-component', ['multiple_or_words_search'=>$multiple_or_words_search])->layout('layouts.base');
    }
}
