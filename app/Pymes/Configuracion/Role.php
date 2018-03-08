<?php

namespace Pymes\Configuracion;

use App\Pymes\Intermediate;

class Role extends Intermediate
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
