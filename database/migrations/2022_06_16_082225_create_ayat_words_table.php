<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyatWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayat_words', function (Blueprint $table) {
            $table->id();
            $table->string('unique_key');
            $table->string('surah_no');
            $table->string('ayat_no');
            $table->longText('arabic_root_word');
            $table->longText('normalize_word');
            $table->longText('Transliteration_word');
            $table->longText('english_word');
            $table->longText('word_sub_category');
            $table->longText('word_sub_category_description');
            $table->longText('inference_flag');
            $table->longText('hadith_reference');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayat_words');
    }
}
