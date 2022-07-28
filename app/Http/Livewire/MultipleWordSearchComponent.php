<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;
use Livewire\WithPagination;

class MultipleWordSearchComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;
    public $multipleWordSearch, $multipleWordSearchTwo,$multipleWordSearchThree;
    public $multipleWordSearchTabTwo;
    public $multipleWordSearchTabThree;
    
    public $tabStatus = 'tabOne';


    public function tabchnage($value)
    {
        $this->tabStatus = $value;
    }


    public function render()
    {
        $multiple_words_search = AyatWord::where('arabic_root_word', 'like', '%'.$this->multipleWordSearch.'%')
        // ->where(function($query){
        //     $query->where('arabic_root_word', 'like', '%'.$this->multipleWordSearchTwo.'%');
        //     $query->orWhere('arabic_root_word', 'like', '%'.$this->multipleWordSearchThree.'%');
        // })
        ->paginate($this->sortingValue);

        $multiple_words_search_tab_two = AyatWord::where('arabic_root_word', 'like', '%'.$this->multipleWordSearchTabTwo.'%')->paginate($this->sortingValue);
        $multiple_words_search_tab_three = AyatWord::where('arabic_root_word', 'like', '%'.$this->multipleWordSearchTabThree.'%')->paginate($this->sortingValue);
        
        return view('livewire.multiple-word-search-component', ['multiple_words_search'=>$multiple_words_search, 'multiple_words_search_tab_two'=>$multiple_words_search_tab_two, 'multiple_words_search_tab_three'=>$multiple_words_search_tab_three])->layout('layouts.base');
    }
}