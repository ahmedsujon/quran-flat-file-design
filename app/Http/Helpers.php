<?php

use App\Models\Hadith;
use App\Models\SuraAyat;

function suraAyatData($surah_number, $ayat_number){
    $data = SuraAyat::where('surah_number', $surah_number)->where('ayat_number', $ayat_number)->first();
    return $data;
}

// function hadithData($hadith_referance){

//     if ($hadith_referance != '0'){
//         $data = Hadith::where('hadith_referance', $hadith_referance)->first()->hadith_description;
//     }else{
//         $data = '';
//     }

//     return $hadith_referance;
// }