<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meja extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_meja',
        'type_meja',
        'harga',
        'ready',
    ];
}
