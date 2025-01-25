<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    use HasFactory;
    protected $table = 'profile';
    protected $fillable = ['nama', 'slogan', 'banner1', 'banner2', 'banner3', 'sekilas_title', 'sekilas', 'tentang', 'tentang_mengapa', 'logo', 'alamat'];
}
