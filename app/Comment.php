<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['name', 'email', 'comment', 'curso_id'];  

	public function curso()
	{
		return $this->belongsTo(Curso::class,'curso_1d');
	}  
}
