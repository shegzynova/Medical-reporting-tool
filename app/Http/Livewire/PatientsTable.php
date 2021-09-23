<?php

namespace App\Http\Livewire;

use App\Exports\patientsExport;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Patient;
use Maatwebsite\Excel\Facades\Excel;

class PatientsTable extends DataTableComponent
{

    public array $bulkActions = [
        'exportSelected' => 'Export',
    ];


    public function exportSelected()
    {
        return Excel::download(new patientsExport, 'patients-collection.csv');
    }


    public function columns(): array
    {
        return [
            Column::make('Patient\'s Name')
                ->sortable()
                ->searchable(),
            Column::make('Age')
                ->sortable()
                ->searchable(),
            Column::make('E-mail')
                ->sortable()
                ->searchable(),
            Column::make('Phone')
                ->sortable()
                ->searchable(),
            Column::make('Blood Group')
                ->sortable()
                ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return Patient::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.patients_table';
    }

    // public function AddObservation($patients){
    //     $this->dispatchBrowserEvent('show-form');
    // }
}
