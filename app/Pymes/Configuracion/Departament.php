<?php

namespace Pymes\Configuracion;

use Pymes\Intermediate;

class Departament extends Intermediate
{
    protected $table = 'departaments';
    protected $fillable = ['name'];
}