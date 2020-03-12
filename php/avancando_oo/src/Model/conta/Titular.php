<?php

    namespace Cursos_alura\POO\Model\Conta;

use Cursos_alura\POO\Model\CPF;

// use Curso_alura\POO\Model\CPF;


    class Titular 
    {
        private $cpf;
        private $nome;
        
        /************ Métodos públicos ************/

        public function __construct(CPF $cpf, string $nome)
        {
            $this->cpf = $cpf;
            $this->validaNome($nome);
            $this->nome = $nome;
        }

        public function recuperaCpf(): string
        {
            return $this->cpf->recuperaNumero();
        }
        
        /************ Métodos privados ************/

        private function validaNome($nome_titular)
        {
            if (strlen($nome_titular) < 5) {
                echo 'Nome inválido. O nome precisa conter no mínimo 5 caracteres'; 
                exit();
            }
        }
    }
    
