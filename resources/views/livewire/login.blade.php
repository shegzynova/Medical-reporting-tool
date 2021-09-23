<form class="flex flex-col" wire:submit.prevent="loginUser">
    @yield('section')
    @if (session()->has('error'))
            <div class="text-white bg-red-500 p-3">
                {{ session('error') }}
            </div>
            @endif
            @if (session()->has('success'))
            <div class="text-white bg-green-500 p-3">
                {{ session('success') }}
            </div>
            @endif

    <div class="mb-6 pt-3 rounded bg-gray-200">
        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
        <input type="text" wire:model="email" autocomplete="off" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
    </div>
    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
    <div class="mb-6 pt-3 rounded bg-gray-200">
        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
        <input type="password" wire:model="password" autocomplete="on" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
    </div>
    @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
    {{-- <div class="flex justify-end">
        <a href="#" class="text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6">Forgot your password?</a>
    </div> --}}
    <button class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In</button>
</form>
