<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    //
    protected $table = 'motor';
    use HasFactory;
    protected $fillable = ['nama', "harga", "jam_mulai", "jam_selesai", "helm", "wilayah", "include", "foto"];
}
