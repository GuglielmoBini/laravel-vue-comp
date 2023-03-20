<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'platform',
        'publisher',
        'genre',
        'image_url',
        'description',
        'release_date',
        'weight'
    ];

    // videogames
    public function videogames()
    {
        return $this->belongsTo(Videogame::class);
    }
}
