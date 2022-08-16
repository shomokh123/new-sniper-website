<?php

namespace App\Exports;

use App\Models\generalForm;


use Maatwebsite\Excel\Concerns\FromCollection;

class GeneralFormExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return generalForm::all();
    }
}
