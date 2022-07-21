<?php

namespace App\Http\Livewire;

use App\Imports\AyatWordImport;
use App\Imports\HadithImport;
use App\Imports\SuraImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class HomeComponent extends Component
{

    public $sortingValue = 10, $searchTerm;
    public $excel;
    use WithFileUploads;

    // Ayat Import
    // public function uploadExcel()
    // {
    //     $this->validate([
    //         'excel'=>'required',
    //     ]);
    //     Excel::import(new AyatWordImport, $this->excel);
    //     $this->excel = '';
    //     return "Record Uploaded Successfuly!";
    // }

    //Sura Import
    public function uploaSuradExcel()
    {
        $this->validate([
            'excel'=>'required',
        ]);
        Excel::import(new SuraImport, $this->excel);
        $this->excel = '';
        return "Record Uploaded Successfuly!";
    }
    
    // Hadith Import
    // public function uploadHadithExcel()
    // {
    //     $this->validate([
    //         'excel'=>'required',
    //     ]);
    //     Excel::import(new HadithImport, $this->excel);
    //     $this->excel = '';
    //     return "Record Uploaded Successfuly!";
    // }

    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base');
    }
}
