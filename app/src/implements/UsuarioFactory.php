<?php 

    namespace App_implements;

    use App_implements\UsuarioInterface;
    use App_implements\Professor;
    use App_implements\Administrador;
    use App_implements\Diretor;
    use Exception;

    class UsuarioFactory {
        public static function criar(string $perfil): UsuarioInterface {
            switch ($perfil) {
                case 'professor':
                    return new Professor();
                case 'administrador':
                    return new Administrador();
                case 'administrador_supremo':
                    return new Diretor();
                default:
                    throw new Exception('Perfil inválido');
            }
        }
    }