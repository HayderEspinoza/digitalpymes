<?php

namespace Pymes\Configuracion;

use Pymes\Intermediate;

class Category extends Intermediate
{
    protected $table = 'categories';
    protected $fillable = ['name'];
}