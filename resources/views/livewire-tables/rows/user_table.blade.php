

<x-livewire-tables::table.cell>
{{ $row->first_name }}
</x-livewire-tables::table.cell>


<x-livewire-tables::table.cell>
{{ $row->last_name }}
</x-livewire-tables::table.cell>


<x-livewire-tables::table.cell>
{{ $row->email }}
</x-livewire-tables::table.cell>


<x-livewire-tables::table.cell>
{{ ucfirst($row->role) }}
</x-livewire-tables::table.cell>
