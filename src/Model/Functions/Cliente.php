<?php

namespace Src\Model\Functions;

use Src\Model\Entities\Clientes;

class Cliente
{
    public string $mensagem;
    private array $clientes;   // Array de clientes
    private Clientes $cliente; // Objeto do cliente
    private bool $novo;

    public function __construct()
    {
        $this->mensagem = '';
        $this->novo = false;
    }


}