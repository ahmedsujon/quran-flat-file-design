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
            $table->string('unique_key')->nullable();
            $table->string('surah_no')->nullable()->nullable();
            $table->string('ayat_no')->nullable();
            $table->longText('arabic_root_word')->nullable();
            $table->longText('normalize_word')->nullable();
            $table->longText('transliteration_word')->nullable();
            $table->longText('english_word')->nullable();
            $table->longText('word_sub_category')->nullable();
            $table->longText('word_sub_category_description')->nullable();
            $table->longText('inference_flag')->nullable();
            $table->longText('hadith_reference')->nullable();
            
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
