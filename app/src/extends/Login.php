<?php

    namespace App_extends;

    require __DIR__.'/../vendor/autoload.php';

    use App_extends\UsuarioFactory;

    class Login {
        public function executar($lo,$se) {
            $login = $lo;
            $senha = $se;

            $perfil = 'professor'; 

            $usuario = UsuarioFactory::criar($perfil);

            if ($usuario->autenticar($login, $senha)) {
                $autorizacoes = $usuario->autorizar();

                echo "\n<br>Bem-vindo, $login! Você tem acesso às seguintes funcionalidades: " . implode(', ', $autorizacoes);

            
                
            } else {
                echo '\n<br>Login ou senha incorretos.';
            }
        }
    }

    $login = new Login();
$login->executar('Pedro', '260');