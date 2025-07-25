<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table ="genres";
    protected $primarykey ="id";
    protected $fillable = ['id','nama'];

    public function film ()
    {
        return $this->hasMany(Film::class);
    }
}