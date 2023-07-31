<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ComicController as ComicController;

class Comic extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'thumb', 'cover_image', 'thumb2', 'price', 'series', 'sale_date', 'type', 'artists', 'writers'];
}
