<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Berita extends Model
{
    use HasFactory;
     /** 
     * fillable 
     * 
     * @var array 
     */ 
    protected $fillable = [  
        'judul', 
        'deskripsi', 
        'penulis', 
    ];

    public function galer(): HasMany
    {
        return $this->hasMany(Galeri::class);
    }
}
