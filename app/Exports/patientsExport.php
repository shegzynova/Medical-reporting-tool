<?php

namespace App\Exports;

use App\Models\Observation;
use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromCollection;

class patientsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // $data = [

        // ];
        return Observation::with('user')->get();
    }


    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Age',
            'E-Mail',
            'Phone',
        ];
    }
}
