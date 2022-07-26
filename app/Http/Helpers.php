<?php

use App\Models\Hadith;
use App\Models\SuraAyat;

function suraAyatData($surah_number, $ayat_number){
    $data = SuraAyat::where('surah_number', $surah_number)->where('ayat_number', $ayat_number)->first();
    return $data;
}

