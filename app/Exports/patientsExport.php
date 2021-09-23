<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromCollection;

class patientsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = [
            
        ];
        return Patient::all();
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
