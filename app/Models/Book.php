<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Define the table associated with the model (if different from the pluralized model name)
    // protected $table = 'books';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'title',
        'description',
        'genre',
        'price',
    ];

    // Optionally, specify which attributes should be hidden for arrays (like sensitive data)
    // protected $hidden = [
    //     'created_at', 'updated_at',
    // ];

    // Optionally, specify the attributes that should be cast to native types
    protected $casts = [
        'price' => 'decimal:2',
    ];
}
