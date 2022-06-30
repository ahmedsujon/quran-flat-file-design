<?php

use App\Http\Livewire\AyatWordComponent;
use App\Http\Livewire\HadithComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\MultipleWordSearchComponent;
use App\Http\Livewire\SearchListComponent;
use App\Http\Livewire\SingleSearchComponent;
use App\Http\Livewire\SurahAyatComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class)->name('website');

Route::get('/quran-database-search', SearchListComponent::class)->name('database.search');

Route::get('/quran-single-word-search', SingleSearchComponent::class)->name('single.word.search');
Route::get('/multiple-word-search', MultipleWordSearchComponent::class)->name('multiple.word.search');
Route::get('/multiple-and-word-search', MultipleWordSearchComponent::class)->name('multiple.or.word.search');

Route::get('/ayat-word', AyatWordComponent::class)->name('ayat-word');
Route::get('/hadith', HadithComponent::class)->name('hadith');
Route::get('/sura-ayat', SurahAyatComponent::class)->name('sura-ayat');


