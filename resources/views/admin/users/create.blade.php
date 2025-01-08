<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Pengguna') }}
        </h2>
    </x-slot>

    <div class="pt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{ route('users.index') }}">
                    <button class="bg-gray-900 hover:bg-white hover:text-black text-white font-bold py-2 px-4 rounded">
                        Kembali
                    </button>
                </a>
                <div id='recipients' class="p-8 mt-6 lg:mt-0 text-white dark:bg-gray-800 rounded shadow">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        
                        <!-- Name -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="name" class="block text-gray-900 dark:text-white font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Nama
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-input block w-full text-black focus:bg-gray-500 rounded-md">
                                @error('name')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="email" class="block text-gray-900 dark:text-white font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Email
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-input block w-full text-black focus:bg-gray-500 rounded-md">
                                @error('email')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="password" class="block text-gray-900 dark:text-white font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Password
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="password" id="password" name="password" class="form-input block w-full text-black focus:bg-gray-500 rounded-md">
                                @error('password')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Password Confirmation -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="password_confirmation" class="block text-gray-900 dark:text-white font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Konfirmasi Password
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-input block w-full text-black focus:bg-gray-500 rounded-md">
                                @error('password_confirmation')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Role -->
                        {{-- <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="role" class="block text-gray-900 dark:text-white font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Role
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="role" id="role" class="form-select text-black block w-full rounded-md focus:bg-gray-500">
                                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                </select>
                                @error('role')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="flex justify-end">
                            <button type="submit" class="bg-gray-900 text-white px-6 py-2 rounded-md dark:bg-slate-100 dark:text-gray-900 font-bold">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
