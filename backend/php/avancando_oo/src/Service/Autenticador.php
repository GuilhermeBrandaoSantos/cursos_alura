<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;
// use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador{
    public function tentaLogin(Autenticavel $autenticavel, string $senha)
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo 'Login ok.';
        }else {
            echo 'Login nok.';
        }
    }
}