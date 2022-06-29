<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuraAyatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sura_ayats', function (Blueprint $table) {
            $table->id();
            $table->string('surah_number');
            $table->string('ayat_number');
            $table->longText('ayat_english_description');
            $table->longText('ayat_arabic_description');
            $table->longText('relavant_ayat');
            $table->string('surah_name');
            $table->longText('arabic_root_word');
            $table->longText('normalized_arabic_word');
            $table->longText('translitaration_word');
            $table->longText('english_word_subject');
            $table->longText('english_word_sub_subject');
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
        Schema::dropIfExists('sura_ayats');
    }
}
