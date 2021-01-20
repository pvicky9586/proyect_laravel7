<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoResp extends Model
{
    protected $table = 'curso_resps';



    public function resps()
		{
				return $this->hasMany(Responsabl::class);
		}
}
