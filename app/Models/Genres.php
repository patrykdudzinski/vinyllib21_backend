<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;
    
    protected $table = 'vinyl_genre';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['name'];
    public $timestamps = false;
}
