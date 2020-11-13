<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    protected $fillable = [ 'cedula','name','last_name','id_curso', 'Met_pago', 'pago', 'email', 'telef', 'NroWp', 'user_created', 'user_updated'  ];
}
