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

		public function curs()
		{
				return $this->belongsToMany(Curso::class);
		}

		public function parts()
		{
				return $this->belongsToMany(Participant::class);
		}
}
