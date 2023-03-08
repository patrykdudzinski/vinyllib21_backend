<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Library extends Model
{
    use HasFactory;
    protected $table = 'vinyl_lib';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['name', 'artist', 'year', 'record_label', 'genre'];
    public $timestamps = false;
    
    public function getLibrary(){
        
        return DB::table('vinyl_lib')
            ->select('vinyl_lib.artist', 'vinyl_lib.name', 'vinyl_lib.year', 'vinyl_record_label.name as record_label', 'vinyl_genre.name as genre')
            ->join('vinyl_record_label', 'vinyl_lib.record_label', '=', 'vinyl_record_label.id')
            ->join('vinyl_genre', 'vinyl_lib.genre', '=', 'vinyl_genre.id')
            ->orderBy('artist', 'asc')
            ->get();
    }


}
