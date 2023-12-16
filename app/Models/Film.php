<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'release_date',
        'ticket_price',
        'country',
        'genre',
        'photo'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
