<div class="container mx-auto px-40 my-5">
    <div>
        @if (session()->has('message'))
            <div class="text-white bg-green-500 p-3">
                {{ session('message') }}
            </div>
        @endif
        {{-- {{ $patient_id }} --}}
    </div>
    <form class="w-full" wire:submit.prevent="addObservation">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                @error('first_name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                @error('last_name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">

            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                    for="">
                    First Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                     type="text" disabled value="{{ $patient->name }}">
            </div>

            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                    for="">
                    Blood Group
                </label>
                <input disabled
                    class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                     type="text" value="{{ $patient->blood_group }}">
            </div>
        </div>

        @error('observation') <span class="text-red-500">{{ $message }}</span> @enderror
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                    for="">
                    Observation
                </label>
                <input type="hidden" wire:model="patient_id" value="{{ $patient->id }}">
                <textarea wire:model="observation" placeholder="Enter Patient's Observation" class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" cols="30" rows="10"></textarea>
            </div>
        </div>


        <div class="flex justify-end pt-2">
            <button type="submit"
                class="px-4 p-3 rounded-lg text-white bg-green-500 hover:bg-green-800 hover:text-white mr-2">Submit</button>
            {{-- <button
                class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button> --}}
        </div>
    </form>

</div>
