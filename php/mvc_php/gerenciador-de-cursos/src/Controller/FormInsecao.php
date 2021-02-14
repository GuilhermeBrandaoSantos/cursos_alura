<?php


namespace Alura\Cursos\Controller;


class FormInsecao implements InterfaceControladorRequisicao
{
   public function processaRequisicao(): void
   {
      require __DIR__ . '../../../view/cursos/formulario-add-curso.php';
   }
}
