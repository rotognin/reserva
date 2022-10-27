<?php

namespace Src\Model\Entities;

use CoffeeCode\DataLayer\DataLayer;

class Clientes extends DataLayer
{
    public function __construct()
    {
        parent::__construct('clientes_tb', ['nome', 'email'], 'id', false);
    }
}