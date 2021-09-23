<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'First Name',
            'Last Name',
            'E-Mail',
            'Role',
        ];
    }

    public function map($users): array
    {
        return [
            Date::dateTimeToExcel($users->created_at),
        ];
    }
}
