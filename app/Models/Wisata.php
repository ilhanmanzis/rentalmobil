<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisata';
    protected $filelable = ["id_mobil", "nama", "harga",    "wilayah", "include", "foto"];

    public function mobil(): BelongsTo
    {
        return $this->belongsTo(Mobil::class, 'id_mobil', 'id_mobil');
    }
}
