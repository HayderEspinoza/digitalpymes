<?php

namespace Pymes\Configuracion;

use Pymes\Intermediate;

class Role extends Intermediate
{
	protected $table = 'roles';
    protected $fillable = ['name'];
}
