<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Galeri extends Model
{
    use HasFactory;

    /** 
     * fillable 
     * 
     * @var array 
     */ 
    protected $fillable = [ 
        'gambar', 
        'nama',
    ]; 

    public function berita(): BelongsTo
    {
        return $this->belongsTo(Berita::class);
    }
}
