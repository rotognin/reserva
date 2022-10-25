<?php

namespace Src\Controller;

class Controller
{
    public static function principal()
    {
        self::painel();
    }

    // Acesso ao painel (capa do site)
    public static function painel()
    {
        self::doLogout();
        self::view('index');
    }

    private static function doLogout()
    {
        session_unset();
    }

    public static function view(string $view, array $array = [])
    {
        $view = str_replace('.', DS, $view);
        $arquivo = '.' . DS . 'src' . DS . 'View' . DS . $view . '.php';

        if (!file_exists($arquivo)){
            echo '.... Arquivo não existe ... ' . $arquivo;
            die();
        }

        if (!empty($array)){
            foreach($array as $var => $valor){
                $$var = $var;
                $$var = $valor;
            }
        }

        $rota = function(string $acao = '', string $controlador = ''){
            $link = 'index.php?';

            if (!empty($controlador)){
                $link .= 'control=' . $controlador . '&';
            }

            if (!empty($acao)){
                $link .= 'action=' . $acao;
            }

            return $link;
        };

        ob_start();
        require_once $arquivo;
        $pagina = ob_get_contents();
        ob_end_clean();
        echo $pagina;
    }
}