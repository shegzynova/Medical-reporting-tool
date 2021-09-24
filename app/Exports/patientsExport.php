<?php

namespace App\Exports;

use App\Models\Observation;
use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class patientsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return Observation::all();

    }



    // Asign Header to the sheet
    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Blood Group',
            'Observation',
        ];
    }
}
