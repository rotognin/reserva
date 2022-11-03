<?php

namespace Src\Model\Entidades;

use CoffeeCode\DataLayer\DataLayer;

class Admins extends DataLayer
{
    public function __construct()
    {
        parent::__construct('admin_tb', ['nome', 'login'], 'id', false);
    }
}