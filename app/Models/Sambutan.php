<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sambutan extends Model
{
    use HasFactory;

    protected $table = 'sambutan';

    protected $fillable = [
        'judul', 
        'slug',
        'body', 
        'body_full', 
        'foto', 
        'nama', 
        'jabatan'
    ];

    protected $hidden = [];

}
