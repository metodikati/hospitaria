<?php

namespace MetodikaTI;

use Illuminate\Database\Eloquent\Model;

class Cotizadorsdatos extends Model
{
    public function cot()
  	{
  		return $this->belongsTo('MetodikaTI\Cotizador', 'cotizador_id', 'id');
  	}
}
