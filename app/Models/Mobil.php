<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobil';
    protected $filelable = ["nama", "harga_lepas", "harga_driver", "jam_mulai", "jam_selesai", "pintu", "penumpang", "wilayah", "include", "foto"];

    public function wisatas(): HasMany
    {
        return $this->hasMany(Wisata::class, 'id_mobil', 'id_mobil');
    }
}
