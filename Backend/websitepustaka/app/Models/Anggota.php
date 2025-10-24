<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Anggota extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id_anggota';
    protected $table = 'anggotas'; // Tambahkan ini
    // ... sisanya sama
}
