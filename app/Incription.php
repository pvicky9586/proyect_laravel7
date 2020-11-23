<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incription extends Model
{
      protected $table = 'incriptions';
      protected $fillable = [ 'curso_id', 'part_id'];
      
   	
		public function pago()
		{
				return $this->hasOne(IncriptionPago::class);
		}
}
