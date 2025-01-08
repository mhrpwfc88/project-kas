<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
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
@include('layouts.navbar')

    {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('kategori.create') }}">
                        <button class="bg-gray-900 hover:bg-white hover:text-black text-white font-bold py-2 px-4 rounded">
                            Tambah Kategori
                          </button>
                    </a>
                    <div id='recipients' class="p-8 mt-6 lg:mt-0 text-white  dark:bg-gray-800 rounded shadow ">
                        @if (session('success'))
                        <p>{{ session('success') }}</p>
                        @endif
                        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                            <thead>
                                <tr>
                                    <th data-priority="1">Name</th>
                                    <th data-priority="2">keterangan</th>
                                    <th data-priority="3">status</th>
                                    <th data-priority="4">aksi</th>
                                 
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($kategoris as $kategori)
                                    
                            
                                <tr >
                                    <td>{{ $kategori->nama }}</td>
                                    <td>{{ $kategori->keterangan }}</td>
                                    <td>{{ $kategori->status }}</td>
                                   <td>
                                        <a href="{{ route('kategori.edit', $kategori->id_kategori) }}" class="text-blue-500">
                                            <button type="submit" class="bg-gray-900 hover:bg-white hover:text-black text-white font-bold py-2 px-4 rounded">
                                                Edit
                                               </button>
                                        </a>
                                    <form id="deleteForm" action="{{ route('kategori.destroy', $kategori->id_kategori) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirmDelete();" type="submit"  class="bg-red-600 hover:bg-white hover:text-black text-white font-bold py-2 px-4 rounded">
                                           Hapus   
                                          </button>
                                    </form>
                                   </td>
                                </tr>
                                @endforeach
                
                           
                            </tbody>
            
                        </table>
            
            
                    </div>
                                       
                </div>
                
            </div>
        </div> --}}


</x-app-layout>
