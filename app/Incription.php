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

		public function part()
		{
			return $this->belongsTo(Participant::class);
		}

		//POR VALID
		
		// public function cur()
		// {
		// 	return $this->hasOne(Curso::class);
		// }
}
