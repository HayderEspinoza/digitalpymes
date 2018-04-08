<?php

namespace Pymes\Configuracion;

use Pymes\Intermediate;

class Lender extends Intermediate
{
    protected $table = 'lenders';
    protected $fillable = ['name', 'city_id', 'address', 'cellphone', 'service_id', 'description', 'website', 'stars', 'visits'];

    public function city()
    {
    	return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function service()
    {
    	return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
