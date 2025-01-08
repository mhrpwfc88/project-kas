<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('kas bulan ') }}{{ $bulan->bulan}} ({{ $bulan->tahun}})
        </h2>
    </x-slot>

    @if (session('success'))
        <div class="py-7">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (session('error'))
        <div class="py-7">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ session('error') }}
                    </div>
                </div>
            </div>
        </div>
    @endif
    

    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{ route('bulan.index') }}">
                    <button class="bg-gray-900 hover:bg-white hover:text-black text-white font-bold py-2 px-4 rounded">
                        Kembali
                    </button>
                </a>
                <a href="">
                    <button class="bg-gray-900 hover:bg-white hover:text-black text-white font-bold py-2 px-4 rounded">
                        Laporan
                    </button>
                </a>
                <p class="mt-2 ml-2">Total Kas di bulan {{ $bulan->bulan}} ({{ $bulan->tahun}}) :   Rp.{{ number_format($totalBayar, 2, ',', '.') }}</p>
              

                <div id='recipients' class="p-8 mt-6 lg:mt-0 text-white  dark:bg-gray-800 rounded shadow ">
                    <table id="example" class="stripe hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1">Nama</th>
                                <th data-priority="1">bayar</th>
                                {{-- <th data-priority="4">aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($uangKasses as $kas)
                                <tr>
                                    <td>{{ $kas->siswa->nama }}</td>
                                    <td><a href="{{route('kas.edit',$kas->id)}}"><button type="submit" class="bg-gray-900 hover:bg-white hover:text-black text-white font-bold py-2 px-4 rounded">Rp. {{ number_format($kas->bayar, 2, ',', '.') }}</button></a></td>
                                </tr>
                            @endforeach


                        </tbody>

                    </table>


                </div>

            </div>

        </div>
    </div>


</x-app-layout>
