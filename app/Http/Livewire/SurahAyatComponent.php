<?php

namespace App\Http\Livewire;

use App\Models\SuraAyat;
use Livewire\Component;

class SurahAyatComponent extends Component
{
    public function render()
    {
        $sura_ayat = SuraAyat::where('arabic_root_word', 'like', '%'.$this->searchTerm.'%')->where('normalize_word', 'like', '%'.$this->searchTerm.'%')->where('Transliteration_word', 'like', '%'.$this->searchTerm.'%')->where('english_word', 'like', '%'.$this->searchTerm.'%')->get();

        return view('livewire.surah-ayat-component', ['sura_ayat'=>$sura_ayat])->layout('layouts.base');
    }
}
