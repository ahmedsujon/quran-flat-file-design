<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuraAyat extends Model
{
    use HasFactory;
    protected $filable = [
        'surah_number',
        'ayat_number',
        'ayat_english_description',
        'ayat_arabic_description',
        'relavant_ayat',
        'surah_name',
        'arabic_root_word',
        'normalized_arabic_word',
        'translitaration_word',
        'english_word_subject',
        'english_word_sub_subject'
    ];
}
