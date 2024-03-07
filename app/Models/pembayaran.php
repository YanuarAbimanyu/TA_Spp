<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $primarkey = 'id_pembayaran';

    protected $fillable =  [
        'id_petugas',
        'nisn',
        'tanggal_bayar',
        'bulan_bayar',
        'id_spp',
        'jumlah_bayar'
    ];
}
