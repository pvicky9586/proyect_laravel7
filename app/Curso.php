<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
     protected $table = 'cursos';
     //protected $fillable = ['titulo', 'description'];


    public function curs()
    {
        return $this->belongsToMany(Participant::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
