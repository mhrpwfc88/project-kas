<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bulanPembayaran extends Model
{
    use HasFactory;
    protected $table = 'bulan_pembayarans';
    protected $fillable = [
        'bulan',
        'tahun',

    ];
    public function kas()
    {
        return $this->hasMany(uangKass::class);
    }
    public function bulan()
    {
        return $this->belongsTo(bulanPembayaran::class);
    }
    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }
}
