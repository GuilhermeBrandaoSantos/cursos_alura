<?php

   use Alura\Cursos\Controller\FormInsecao;
   use Alura\Cursos\Controller\ListarCursos;

   require __DIR__ . '/../vendor/autoload.php';

   switch ($_SERVER['PATH_INFO']) {
      case '/listar-cursos':
         $controlador = new ListarCursos();
         $controlador->processaRequisicao();
         break;
      case '/novo-curso':
         $controlador = new FormInsecao();
         $controlador->processaRequisicao();
         break;      
      default:
         echo "Erro 404";
      break;
   }