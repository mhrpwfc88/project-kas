<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Kas') }}
        </h2>
    </x-slot>

    <div class="pt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{ route('bulan.kas',$kas->bulan_id) }}">
                    <button class="bg-gray-900 hover:bg-white hover:text-black text-white font-bold py-2 px-4 rounded">
                        Kembali
                    </button>
                </a>
                <div id='recipients' class="p-8 mt-6 lg:mt-0 text-white dark:bg-gray-800 rounded shadow">
                    <form action="{{route('kas.update',$kas->id )}}" method="POST" >
                        @csrf
                        @method('PUT')

                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="bayar" class="block text-gray-900 dark:text-white font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    bayar
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" id="bayar" name="bayar" value="{{ old('bayar', $kas->bayar) }}" class="form-input block w-full text-black focus:bg-gray-500 rounded-md">
                                @error('bayar')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

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
