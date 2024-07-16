<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'genre',
        'price',
    ];

    // If you have relationships, you can define them here
    // For example, if a book belongs to an author:
    // public function author()
    // {
    //     return $this->belongsTo(Author::class);
    // }

    // If a book has many reviews:
    // public function reviews()
    // {
    //     return $this->hasMany(Review::class);
    // }
}

