<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = [
        'nama',
        'no_telepon',
        'jenis_kelamin',
    ];
    public function kas()
{
    return $this->hasMany(uangKass::class);
}

}
