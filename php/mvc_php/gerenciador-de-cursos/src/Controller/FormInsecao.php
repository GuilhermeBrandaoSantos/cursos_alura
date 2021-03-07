<?php


namespace Alura\Cursos\Controller;


class FormInsecao extends ControllerComHtml implements InterfaceControladorRequisicao
{
   public function processaRequisicao(): void
   {
      echo $this->renderizaHtml('cursos/formulario-add-curso.php', [
         'tituloPagina' => 'Adicionar novo curso',
         'titulo' => 'Novo curso',
      ]);
   }
}
