<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Anggota') }}
        </h2>
    </x-slot>

    <div class="pt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{ route('siswas.index') }}">
                    <button class="bg-gray-900 hover:bg-white hover:text-black text-white font-bold py-2 px-4 rounded">
                        Kembali
                    </button>
                </a>
                <div id="recipients" class="p-8 mt-6 lg:mt-0 text-white dark:bg-gray-800 rounded shadow">
                    <form action="{{ route('siswas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Nama -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="nama" class="block text-gray-900 dark:text-white font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Nama
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="form-input block w-full text-black focus:bg-gray-500 rounded-md">
                                @error('nama')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    
                        <!-- Deskripsi -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="deskripsi" class="block text-gray-900 dark:text-white font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    No telepon
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" id="no_telepon" name="no_telepon" value="{{ old('no_telepon') }}" class="form-input block w-full text-black focus:bg-gray-500 rounded-md">
                                @error('no_telepon')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    
                        <!-- Status -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="status" class="block text-gray-900 dark:text-white font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Jenis Kelamin
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select text-black block w-full rounded-md focus:bg-gray-500">
                                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    <option value="hidden" {{ old('jenis_kelamin') == 'hidden' ? 'selected' : '' }}>hidden</option>
                                </select>
                                @error('jenis_kelamin')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    
                        <!-- Gambar -->
                      
                    
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
