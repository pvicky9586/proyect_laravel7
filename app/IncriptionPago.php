<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncriptionPago extends Model
{
	protected $table = 'incription_pagos';
    protected $fillable = [ 'meth_pago', 'pago','incription_id', 'user_created', 'user_updated'];

    
}
