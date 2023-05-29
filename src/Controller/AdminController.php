<?php

namespace Src\Controller;

use Src\Model\Funcoes\Admin;

class AdminController extends Controller
{
    public static function login(array $post, array $get, string $mensagem = '')
    {
        // Ir para a página de login para o sistema administrativo
        parent::view('admin.login', ['mensagem' => $mensagem]);
    }

    public static function efetuarlogin(array $post, array $get, string $mensagem = '')
    {
        if ($post['login'] == '' || $post['senha'] == '') {
            $mensagem = 'Favor informar o login e a senha';
            self::login($post, $get, $mensagem);
            exit;
        }

        self::view('admin.index');
    }
}
