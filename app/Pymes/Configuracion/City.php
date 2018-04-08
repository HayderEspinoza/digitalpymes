<?php

namespace Pymes\Configuracion;

use Pymes\Intermediate;
use Pymes\Configuracion\Departament;

class City extends Intermediate
{
    protected $table = 'cities';
    protected $fillable = ['name', 'departament_id'];

    public function departament()
    {
    	return $this->belongsTo(Departament::class, 'departament_id', 'id');
    }
}
