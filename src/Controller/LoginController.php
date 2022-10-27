<?php

namespace Src\Controller;

use Lib\Token;
use Src\Model\Functions\Cliente;

class LoginController extends Controller
{
    public static function login()
    {
        Token::criarCsrf();
        parent::view('login');
    }

    public static function efetuarlogin(array $post, array $get)
    {

    }
}