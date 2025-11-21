<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ekskul extends Model
{
    use HasFactory;

    protected $table = 'ekskuls';

    protected $fillable = [
        'nama_ekskul',
        'pembina',
        'hari',
        'jam',
        'keterangan',
    ];
}
