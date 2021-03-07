<?php

use Alura\Cursos\Controller\{
   Edicao,
   Exclusao,
   FormInsecao,
   FormLogin,
   ListarCursos,
   Persistencia,
   RealizaLogin,
};

$routes = [
   '/listar-cursos' => ListarCursos::class,
   '/novo-curso' => FormInsecao::class,
   '/salvar-curso' => Persistencia::class,
   '/excluir-curso' => Exclusao::class,
   '/editar-curso' => Edicao::class,
   '/login' => FormLogin::class,
   '/realiza-login' => RealizaLogin::class
];

return $routes;
