<?php

namespace Alura\Banco\Service;
use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador{
    public function tentaLogin(Diretor $diretor, string $senha)
    {
        if ($diretor->podeAutenticar($senha)) {
            echo 'Login ok.';
        }else {
            echo 'Login nok.';
        }
    }
}