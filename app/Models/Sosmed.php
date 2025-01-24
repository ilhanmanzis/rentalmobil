<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    //
    protected $table = 'sosmed';
    use HasFactory;
    protected $filelable = ['wa', 'url_wa', 'fb', 'url_fb', 'ig', 'url_ig', 'tt', 'url_tt', 'x', 'url_x'];
}
