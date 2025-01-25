<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';
    protected $fillable = ["id_mobil", "nama", "harga",    "wilayah", "include", "daftar_wisata", "foto"];
    protected $with = ['mobil'];

    public function mobil(): BelongsTo
    {
        return $this->belongsTo(Mobil::class, 'id_mobil', 'id_mobil');
    }
}
