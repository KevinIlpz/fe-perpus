<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'rack_id',
        'release_date',
        'isbn',
        'stock',
        'category_id'
    ];

    public function rack()
    {
        return $this->belongsTo(Rack::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}