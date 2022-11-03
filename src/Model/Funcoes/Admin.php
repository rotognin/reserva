<?php

namespace Src\Model\Funcoes;

use Src\Model\Entidades\Admins;
use Lib\Funcoes;

class Admin
{
    public string $mensagem;
    private array $admins;
    private Admins $admin;
    private bool $novo;

    public function __construct()
    {
        $this->mensagem = '';
        $this->novo = false;
    }




}