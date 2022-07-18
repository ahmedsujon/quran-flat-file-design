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
        return new AyatWord([
            'unique_key'                    => $row['unique_key'],
            'surah_no'                      => $row['surah_no'],
            'ayat_no'                       => $row['ayat_no'],
            'arabic_root_word'              => $row['arabic_root_word'],
            'normalize_word'                => $row['normalize_word'],
            'Transliteration_word'          => $row['Transliteration_word'],
            'english_word'                  => $row['english_word'],
            'word_sub_category'             => $row['word_sub_category'],
            'word_sub_category_description' => $row['word_sub_category_description'],
            'hadith_reference'              => $row['hadith_reference'],
        ]);
    }
}
