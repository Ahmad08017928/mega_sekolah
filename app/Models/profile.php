<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'nama',
        'password',
        'email/phone',
        'gender',
        'kelas',
        'nisn'
    ];

    public function jurusan(): HasMany
    {
        return $this->hasMany(Jurusan::class);
    }
}
