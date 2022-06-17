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
            $table->string('arabic_root_word');
            $table->string('normalize_word');
            $table->string('Transliteration_word');
            $table->string('english_word');
            $table->string('word_sub_category');
            $table->string('word_sub_category_description');
            $table->string('inference_flag');
            $table->string('hadith_reference');
            
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
