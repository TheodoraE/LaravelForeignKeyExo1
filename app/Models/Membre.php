<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;
    public function genres()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
