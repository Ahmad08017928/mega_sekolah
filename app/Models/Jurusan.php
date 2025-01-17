<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['jurusan','kejurusan','deskripsi'];

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
