<?php

namespace App\Imports;

use App\Models\Hadith;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class HadithImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
            $hadithimport = new Hadith();
            $hadithimport->hadith_referance   = $row['hadith_referance'];
            $hadithimport->hadith_description = $row['hadith_description'];
            $hadithimport->save();
    }
}
