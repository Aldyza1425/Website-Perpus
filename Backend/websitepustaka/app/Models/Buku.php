<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_buku';
    protected $fillable = [
        'id_penerbit',
        'id_kategori',
        'judul',
        'stock',
        'tahun_terbit',
        'isbn',
        'gambar'
    ];

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'buku_authors', 'id_buku', 'id_author');
    }

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'id_buku');
    }
}
