<?php

namespace Src\Model\Functions;

use Src\Model\Entities\Clientes;
use Lib\Funcoes;

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

    public function listar(bool $todos = true)
    {
        $params = (string) '';
        $find = (string) '';

        if (!$todos){
            $params = 'status=0';
            $find = 'status = :status';
        }

        $clientes = (new Clientes())->find($find, $params)->fetch(true);

        if (!$clientes){
            $this->mensagem = 'Nenhum cliente cadastrado.';
            return false;
        }

        $this->clientes = $clientes;
        return true;
    }

    public function carregar(int $id)
    {
        $this->cliente = (new Clientes())->findById($id);
    }

    // Obter a lista de clientes que estiverem carregados
    public function obter()
    {
        return $this->clientes ?? false;
    }

    // Obter o registro específico do cliente que estiver carergado
    public function objeto()
    {
        return $this->cliente ?? false;
    }

    private function validarCampos() : bool
    {
        $retorno = true;
        $this->mensagem = '';

        // Fazer a validação dos campos necessários
        if (!$this->cliente->nome == ''){
            $this->mensagem = 'Informe o nome <br>';
            $retorno = false;
        }

        if (!$this->cliente->email == ''){
            $this->mensagem = 'Informe o e-mail <br>';
            $retorno = false;
        }

        if (!$retorno){
            $this->mensagem = substr($this->mensagem, 0, -4);
        }

        return $retorno;
    }

    // Pegar os dados que vierem do formulário
    public function dados(array $dados)
    {
        if ($dados['id'] > 0){
            $this->carregar($dados['id']);
        } else {
            $this->cliente = new Clientes();
            $this->novo = true;
        }

        // Atribuir os dados
        $this->cliente->nome = Funcoes::verificarString($dados['nome']);
        $this->cliente->cpf = Funcoes::verificarString($dados['cpf']);
        $this->cliente->email = Funcoes::verificarString($dados['email']);
        $this->cliente->telefone = Funcoes::verificarString($dados['telefone']);

        if (!$this->novo){
            $this->cliente->status = 1;
        }

        if (!$this->validarCampos()){
            return false;
        }

        return true;
    }

    public function gravar()
    {
        if (!$this->cliente->save()){
            $this->mensagem = $this->cliente->fail()->getMessage();
            return false;
        }

        return true;
    }

    public function alterarStatus(int $status)
    {
        $this->cliente->status = $status;
        $this->gravar();
    }
}