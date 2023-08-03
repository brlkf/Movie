<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FavoredMovie extends Model
{
    
    protected $table = 'favored_movies'; 
    protected $primaryKey = 'id';
    public $timestamps = false; // Disable auto-updating of timestamps

    protected $fillable = ['title', 'release_date'];
}