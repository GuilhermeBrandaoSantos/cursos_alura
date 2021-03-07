<?php

use Alura\Cursos\Controller\FormInsecao;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;

require __DIR__ . '/../vendor/autoload.php';

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '../../config/routes.php';

if (!array_key_exists($caminho, $rotas) ) {
   http_response_code(404);
   exit();
}

$classeControladora = $rotas[$caminho];

$controlador = new $classeControladora();
$controlador->processaRequisicao();