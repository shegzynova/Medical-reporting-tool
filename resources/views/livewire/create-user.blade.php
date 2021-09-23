<div class="container mx-auto px-40 my-5">
    <div>
        @if (session()->has('message'))
            <div class="text-white bg-green-500 p-3">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <form class="w-full" wire:submit.prevent="addUser">
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
                <input wire:model="first_name"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                     type="text" placeholder="Jane">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                    for="">
                    Last Name
                </label>
                <input wire:model="last_name"
                    class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                     type="text" placeholder="Doe">
            </div>
        </div>


        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                    for="">
                    Email
                </label>
                <input wire:model="email"
                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                     type="email" placeholder="Email">
            </div>
        </div>
        @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                    for="">
                    Password
                </label>
                <input wire:model="password"
                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                     type="password" placeholder="Password" autocomplete="on">
                <p class="text-grey-dark text-xs italic">Make it as long and as crazy as
                    you'd like</p>
            </div>
        </div>
        @error('role') <span class="text-red-500">{{ $message }}</span> @enderror
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                    for="">
                    Role
                </label>
                <div class="relative">
                    <select wire:model="role"
                        class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                        >
                        <option value="null" selected disabled>Select role</option>
                        <option value="admin">Admin</option>
                        <option value="nurse">Nurse</option>
                        <option value="doctor">Doctor</option>
                    </select>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end pt-2">
            <button type="submit"
                class="px-4 p-3 rounded-lg text-white bg-green-500 hover:bg-green-800 hover:text-white mr-2">Submit</button>
            <button
                class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
        </div>
    </form>

</div>
