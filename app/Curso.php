<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
     protected $table = 'cursos';
     protected $fillable = ['title', 'description', 'user_created', 'user_updated', 'duracion', 'img', 'cant_resps', 'statud'];

    // protected $attributes = [
    //     'title' => false,
    // ];

    // protected $dateFormat = '12-03-2021';
     // formato para fechas
     // const CREATED_AT = 'creation_date';
     // const UPDATED_AT = 'updated_date';

  
    public function inscs()
    {
         return $this->hasMany(Incription::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    




    //POR VALIDAR


       // public function parts()
       //  {
       //      return $this->hasManyThrough(Participant::class, Incription::class, 'curso_id', 'id', 'id_part');
       //  }




    // public function parts()
    // {
    //     // return $this->hasManyThrough(Participant::class, Incription::class);
    //     return $this->hasMany(Participant::class, 'part_id');
    // }

}
