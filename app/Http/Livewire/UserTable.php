<?php

namespace App\Http\Livewire;

use App\Exports\UsersExport;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class UserTable extends DataTableComponent
{

    public array $bulkActions =  [
        'exportSelected' => 'Export',
    ];

    public function columns(): array
    {
        return [
            Column::make('First Name', 'first_name')
            ->sortable()
            ->searchable(),
            Column::make('Last Name', 'last_name')
            ->sortable()
            ->searchable(),
        Column::make('E-mail', 'email')
            ->sortable()
            ->searchable(),
        Column::make('Role', 'role')
            ->sortable()
            ->searchable(),
    ];
    }



    public function exportSelected()
    {

        if(Auth::user()->role == 'admin'){
            return Excel::download(new UsersExport, 'users-collection.csv');
        }

        else{
            session()->flash('message', 'You are not allowed to export this.');
            return back();
        }
    }

    public function query(): Builder
    {
        return User::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.user_table';
    }


}
