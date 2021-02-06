<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsabl extends Model
{
    
    protected $table = 'responsabls';
    protected $fillable = [ 'cedula','name','last_name', 'email', 'telef', 'NroWp', 'user_created', 'user_updated','profile_id'];

      public function profession()
    {
          return $this->hasOne(Profession::class);
    }

    // public function curs()
    // {
    //     return $this->belognsToMany(Incription::class);
    // }
}
