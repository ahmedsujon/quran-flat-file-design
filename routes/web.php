<?php

use App\Http\Livewire\AyatWordComponent;
use App\Http\Livewire\HadithComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SurahAyatComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class);

Route::get('/ayat-word', AyatWordComponent::class);
Route::get('/hadith', HadithComponent::class);
Route::get('/sura-ayat', SurahAyatComponent::class);
