<?php
    spl_autoload_register(function(string $nome_completo_classe){

        $caminho_arquivo = str_replace('Cursos_alura\\POO', 'src', $nome_completo_classe);
        $caminho_arquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminho_arquivo);
        $caminho_arquivo .= '.php';

        if (file_exists($caminho_arquivo)) {
            require_once $caminho_arquivo;
        }
    });
