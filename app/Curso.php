<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
     protected $table = 'cursos';
     protected $fillable = ['titulo', 'description', 'user_created', 'user_updated', 'duracion', 'img', 'cant_resps', 'statud'];


  
    public function inscs()
    {
         return $this->hasMany(Incription::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    

    // public function inscs()
    // {
    //     return $this->hasMany(Incription::class);
    // }



    //POR VALIDAR

      // public function parts()
    // {
    //     // return $this->hasManyThrough(Participant::class, Incription::class);
    //     return $this->hasMany(Participant::class, 'part_id');
    // }

}
