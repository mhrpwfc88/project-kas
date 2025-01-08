<?php

namespace App\Listeners;

use App\Events\BulanCreated;
use App\Models\siswa;
use App\Models\uangKass;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class CreateUangKasForSiswa
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BulanCreated $event): void
    {
        $bulanId = $event->bulan->id;
        // Ambil semua siswa
        Log::info('Listener called for bulan_id: ' . $bulanId);
        $siswas = siswa::all();

        foreach ($siswas as $siswa) {
            uangKass::create([
                'siswa_id' => $siswa->id,
                'bulan_id' => $bulanId,
                'bayar' => 0, // Atau nilai default lainnya
            ]);
        }
    }
}
