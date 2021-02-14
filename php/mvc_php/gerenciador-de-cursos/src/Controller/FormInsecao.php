<?php


namespace Alura\Cursos\Controller;


class FormInsecao implements InterfaceControladorRequisicao
{
   public function processaRequisicao(): void
   {
      $tituloDaPagina = "Adicionar novo curso";
      $tituloH1 = "Novo curso";
      require __DIR__ . '../../../view/cursos/formulario-add-curso.php';
   }
}
