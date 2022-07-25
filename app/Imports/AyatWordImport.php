<?php

namespace App\Imports;

use App\Models\AyatWord;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AyatWordImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         $ayatimport = new AyatWord();
         $ayatimport->unique_key                     = $row['unique_key'];
         $ayatimport->surah_no                       = $row['surah_no'];
         $ayatimport->ayat_no                        = $row['ayat_no'];
         $ayatimport->arabic_root_word               = $row['arabic_root_word'];
         $ayatimport->normalize_word                 = $row['normalize_word'];
         $ayatimport->transliteration_word           = $row['transliteration_word'];
         $ayatimport->english_word                   = $row['english_word'];
         $ayatimport->word_sub_category              = $row['word_sub_category'];
         $ayatimport->word_sub_category_description  = $row['word_sub_category_description'];
         $ayatimport->inference_flag                 = $row['inference_flag'];
         $ayatimport->hadith_reference               = $row['hadith_reference'];
         $ayatimport->save();
    }
}
