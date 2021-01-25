<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsabl extends Model
{
    
    protected $table = 'responsabls';
    protected $fillable = [ 'cedula','name','last_name', 'email', 'telef', 'NroWp', 'user_created', 'user_updated','profile_id'];

 
	// public function profe()
 //    {
 //        return $this->belognsTo(Profession::class);
 //    }

 //    public function curs()
 //    {
 //        return $this->belognsToMany(Curso::class);
 //    }
}
