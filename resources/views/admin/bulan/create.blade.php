<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Anggota') }}
        </h2>
    </x-slot>

    <div class="pt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{ route('bulan.index') }}">
                    <button class="bg-gray-900 hover:bg-white hover:text-black text-white font-bold py-2 px-4 rounded">
                        Kembali
                    </button>
                </a>
                <div id="recipients" class="p-8 mt-6 lg:mt-0 text-white dark:bg-gray-800 rounded shadow">
                    <form action="{{ route('bulan.store') }}" method="POST">
                        @csrf
                        <!-- Nama -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="tahun" class="block text-gray-900 dark:text-white font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Tahun
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" id="tahun" name="tahun" value="{{ old('tahun') }}" class="form-input block w-full text-black focus:bg-gray-500 rounded-md" required>
                                @error('tahun')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                
                    
                        <!-- Status -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="status" class="block text-gray-900 dark:text-white font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Bulan 
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="bulan" id="bulan" class="form-select text-black block w-full rounded-md focus:bg-gray-500">
                                    <option value="januari" {{ old('bulan') == 'januari' ? 'selected' : '' }}>januari</option>
                                    <option value="Februari" {{ old('bulan') == 'Februari' ? 'selected' : '' }}>Februari</option>
                                    <option value="Maret" {{ old('bulan') == 'Maret' ? 'selected' : '' }}>Maret</option>
                                    <option value="April" {{ old('bulan') == 'April' ? 'selected' : '' }}>April</option>
                                    <option value="Mei" {{ old('bulan') == 'Mei' ? 'selected' : '' }}>Mei</option>
                                    <option value="Juni" {{ old('bulan') == 'Juni' ? 'selected' : '' }}>Juni</option>
                                    <option value="Juli" {{ old('bulan') == 'Juli' ? 'selected' : '' }}>Juli</option>
                                    <option value="Agustus" {{ old('bulan') == 'Agustus' ? 'selected' : '' }}>Agustus</option>
                                    <option value="September" {{ old('bulan') == 'September' ? 'selected' : '' }}>September</option>
                                    <option value="Oktober" {{ old('bulan') == 'Oktober' ? 'selected' : '' }}>Oktober</option>
                                    <option value="November" {{ old('bulan') == 'November' ? 'selected' : '' }}>November</option>
                                    <option value="Desember" {{ old('bulan') == 'Desember' ? 'selected' : '' }}>Desember</option>
                                </select>
                                @error('bulan')
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
