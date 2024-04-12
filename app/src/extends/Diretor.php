<?php 
    namespace App_extends;

    use App_extends\Administrador;
    
    class Diretor extends Administrador {
        public function autorizar(): array {
            $autorizacoes = parent::autorizar();
            $autorizacoes[] = 'configurar_sistema';
            $autorizacoes[] = 'gerenciar_backups';
            return $autorizacoes;
        }
    }