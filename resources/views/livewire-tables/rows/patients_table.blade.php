<x-livewire-tables::table.cell>
{{ $row->name }}
</x-livewire-tables::table.cell>


<x-livewire-tables::table.cell>
{{ $row->age }}
</x-livewire-tables::table.cell>


<x-livewire-tables::table.cell>
{{ $row->email }}
</x-livewire-tables::table.cell>


<x-livewire-tables::table.cell>
{{ $row->phone }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
{{ $row->blood_group }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    <a href="/add/observation/{{ $row->id }}"
    class="bg-transparent hover:bg-green-500 mx-2 my-10 text-green-dark font-semibold hover:text-white py-2 px-4 border border-green hover:border-transparent rounded">
    Add Observation
</a>
</x-livewire-tables::table.cell>
