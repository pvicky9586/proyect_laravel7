<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
	

    //protected $table = 'professions';
    protected $fillable = ['name','abrev'];

    public function parts() 
    {
        return $this->hasMany(Participant::class);
    }


    public function resps() 
    {
        return $this->hasMany(Responsabl::class);
    }


}
