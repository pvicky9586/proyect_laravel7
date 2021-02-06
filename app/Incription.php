<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incription extends Model
{
      protected $table = 'incriptions';
      protected $fillable = [ 'curso_id', 'part_id','conf','user_conf'];
      
   	
		public function pago()
		{
			return $this->hasOne(IncriptionPago::class);
		}

		public function part()
		{
			return $this->belongsTo(Participant::class);
		}

		
		// $users = Incription::where('conf', 1)->get();


 // public function update($id)
 //    {
 //      return $this->"updateee";

 //        // $this->post->save();
 //    }




		//POR VALID
		
		// public function cur()
		// {
		// 	return $this->hasOne(Curso::class);
		// }
}
