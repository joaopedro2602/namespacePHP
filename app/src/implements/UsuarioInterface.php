<?php

    namespace App_implements;

    interface UsuarioInterface {
        public function autenticar(string $login, string $senha): bool;
        public function autorizar(): array;
    }