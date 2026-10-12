<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_anime',
        'tipe',
        'tahun_rilis',
        'genre_utama',
        'sumber_adaptasi',
        'sutradara',
        'jumlah_episode',
        'musim_rilis',
        'nama_file_gambar'
    ];

    protected $table = 'listworks';

    protected $guarded = ['id'];
}