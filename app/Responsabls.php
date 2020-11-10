<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsabls extends Model
{
    protected $fillable = [ 'cedula','name','last_name', 'email', 'telef', 'NroWp', 'user_created', 'user_updated' ];
}
