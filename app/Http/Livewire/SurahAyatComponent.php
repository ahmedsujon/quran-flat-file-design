<?php

namespace App\Http\Livewire;

use App\Models\SuraAyat;
use Livewire\Component;

class SurahAyatComponent extends Component
{
    public $sortingValue = 10, $searchTerm;

    public function render()
    {
        $sura_ayats = SuraAyat::where('ayat_english_description', 'like', '%'.$this->searchTerm.'%')->get();

        return view('livewire.surah-ayat-component', ['sura_ayats'=>$sura_ayats])->layout('layouts.base');
    }
}
