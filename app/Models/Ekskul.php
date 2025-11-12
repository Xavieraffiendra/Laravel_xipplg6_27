<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_ekskul',
        'pembina',
        'hari',
        'jam',
        'keterangan',
    ];
}
