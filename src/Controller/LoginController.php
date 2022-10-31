<?php

namespace Src\Controller;

use Src\Model\Functions\Cliente;

class LoginController extends Controller
{
    public static function login(array $post, array $get, string $mensagem = '')
    {
        parent::view('login', ['mensagem' => $mensagem]);
    }

    public static function efetuarlogin(array $post, array $get)
    {
        if ($post['login'] == '' || $post['senha'] == '')
        {
            self::login($post, $get, 'Necessário informar o login e senha');
            exit;
        }

        parent::view('cliente.index');
    }
}