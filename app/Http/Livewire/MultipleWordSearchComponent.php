<?php

namespace App\Http\Livewire;

use App\Models\AyatWord;
use Livewire\Component;
use Livewire\WithPagination;

class MultipleWordSearchComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;
    public $multipleWordSearch, $multipleWordSearchTwo, $multipleWordSearchThree;

    public $multipleWordSearchTabTwo;
    public $multipleWordSearchTabThree;

    public $tabStatus = 'tabOne';


    public function tabchnage($value)
    {
        $this->tabStatus = $value;
    }

    public function render()
    {
        $multiple_words_search = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleWordSearch . '%')
            ->orWhere('arabic_root_word', 'like', '%' . $this->multipleWordSearchTwo . '%')
            ->orWhere('arabic_root_word', 'like', '%' . $this->multipleWordSearchThree . '%')->get();


        // $multiple_words_search_two = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleWordSearchTwo . '%')->get();
        // $multiple_words_search_three = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleWordSearchThree . '%')->get();


        // $multiple_words_search_tab_two = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleWordSearchTabTwo . '%')->get();
        // $multiple_words_search_tab_three = AyatWord::where('arabic_root_word', 'like', '%' . $this->multipleWordSearchTabThree . '%')->get();

        // $multiple_words_search = collect($multiple_words_search);
        // $multiple_words_search_two = collect($multiple_words_search_two);
        // $multiple_words_search_three = collect($multiple_words_search_three);

        // $multiple_words_search->merge($multiple_words_search_two);
        // $multiple_words_search->merge($multiple_words_search_three);

        // dd($multiple_words_search);


        return view(
            'livewire.multiple-word-search-component',
            ['multiple_words_search' => $multiple_words_search]
        )
            ->layout('layouts.base');
    }
}
