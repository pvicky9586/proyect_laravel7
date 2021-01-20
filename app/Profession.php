<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
	

    //protected $table = 'professions';
    protected $fillable = ['name','abrev'];

    public function users() 
    {
        return $this->hasMany('App/User'::class);
    }

    // public function resps() 
    // {
    //     return $this->hasMany(Responsabl::class);
    // }

    // public function Parts() 
    // {
    //     return $this->hasMany(Responsabl::class);
    // }


}
