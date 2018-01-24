<?php

namespace MetodikaTI;

use Illuminate\Database\Eloquent\Model; 

class Doctor extends Model
{
        public function specialties()
  	{
  		return $this->belongsTo('MetodikaTI\Specialties', 'especialidades_id', 'id');
  	}
}
