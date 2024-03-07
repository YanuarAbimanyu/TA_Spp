<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    
    protected $table = 'siswa';
    protected $primarkey = 'nisn';

    protected $fillable =  [
        'nisn',
        'nis',
        'nama',
        'password',
        'id_kelas',
        'no_telp',
        'alamat',
        'id_spp',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }
}
