<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public $table = "mahasiswa";
    protected $primaryKey = "nim";
    public $incrementing = false;
    protected $keyType = "string";

    protected $fillable = [
        'nim', // tambahkan kolom nim ke dalam fillable
        'nama',
        'foto',
        'umur',
        'alamat',
        'email',
        'created_at',
        'updated_at',
    ];

}
