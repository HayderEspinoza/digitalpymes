<?php

namespace Pymes\Configuracion;

use Pymes\Intermediate;

class Service extends Intermediate
{
    protected $table = 'services';
    protected $fillable = ['name'];
}