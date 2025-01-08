<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class uangKass extends Model
{
    use HasFactory;
    protected $table = 'uang_kasses';
    protected $fillable = [
        'siswa_id',
        'bulan_id',
        'bayar',
    ];

    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }
}
