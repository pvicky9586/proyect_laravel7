<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incripcion_pago extends Model
{
    protected $fillable = [ 'id_curso', 'id_part', 'meth_pago', 'pago'];
}
