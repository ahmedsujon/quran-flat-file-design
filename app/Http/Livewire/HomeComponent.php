<?php

namespace App\Http\Livewire;

use App\Imports\AyatWordImport;
use App\Models\AyatWord;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class HomeComponent extends Component
{

    public $sortingValue = 10, $searchTerm;
    public $excel;
    use WithFileUploads;

    public function uploadExcel()
    {
        $this->validate([
            'excel'=>'required',
        ]);

        Excel::import(new AyatWordImport, $this->excel);
        $this->excel = '';
        return "Record Uploaded Successfuly!";
    }

    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base');
    }
}
