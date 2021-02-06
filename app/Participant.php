<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [ 'cedula','name','last_name', 'email', 'telef', 'NroWp', 'user_updated','user_created'  ];

    // public function profe()
    // {
    //     return $this->hasOne(Profession::class);
    // }


    public function profession()
    {
          return $this->belongsTo(Profession::class);
    }



    public function inscs()
    {
       return $this->hasMany(Incription::class);
    }



       // public function curs()
       //  {
       //      return $this->hasManyThrough(Curso::class, Incription::class, '');
       //  }
}
