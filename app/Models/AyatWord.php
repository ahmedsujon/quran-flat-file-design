<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AyatWord extends Model
{
    use HasFactory;
    
    protected $filable = [
        'unique_key',
        'surah_no',
        'ayat_no',
        'arabic_root_word',
        'normalize_word',
        'transliteration_word',
        'english_word',
        'word_sub_category',
        'word_sub_category_description',
        'inference_flag',
        'hadith_reference'
    ];
}
