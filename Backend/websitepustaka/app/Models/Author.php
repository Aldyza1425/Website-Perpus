<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_author';
    protected $fillable = ['nama'];

    public function bukus()
    {
        return $this->belongsToMany(Buku::class, 'buku_authors', 'id_author', 'id_buku');
    }
}
