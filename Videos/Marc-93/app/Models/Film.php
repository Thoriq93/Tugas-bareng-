<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = "film";
    protected $primaryKey = "id"; 
    protected $fillable = ['film', 'judul', 'ringkasan', 'tahun', 'poster','genre_id','video_url'];

    public function genre()
    {
        return $this->belongsTo(Genre::class); // pastikan model Genre ada
    }
}
