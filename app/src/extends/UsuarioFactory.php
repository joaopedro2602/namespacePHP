<?php 

    namespace App_extends;

    use App_extends\Usuario;
    use App_extends\Professor;
    use App_extends\Administrador;
    use App_extends\Diretor;
    use Exception;

    class UsuarioFactory {
        public static function criar(string $perfil): Usuario {
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