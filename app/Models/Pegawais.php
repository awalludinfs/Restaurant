<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawais extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama',
        'nomer_hp',
        'email',
        'keterangan',
        'status',
        
    ];
    protected $table="pegawai";
}
