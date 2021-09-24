<?php

namespace App\Http\Livewire;

use App\Exports\patientsExport;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class PatientsTable extends DataTableComponent
{

    public array $bulkActions = [
        'exportSelected' => 'Export',
    ];


    public function exportSelected()
    {
        if(Auth::user()->role == 'admin'){
            return Excel::download(new patientsExport, 'patients-collection.csv');
        }else{
            session()->flash('error', 'You are not allowed to export this.');
            return back();
        }
    }


    public function columns(): array
    {
        return [
            Column::make("Patient's Name", 'name')
                ->sortable()
                ->searchable(),
            Column::make('Age')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
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
