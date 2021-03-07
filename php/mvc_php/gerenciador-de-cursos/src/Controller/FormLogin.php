<?php

namespace Alura\Cursos\Controller;

class FormLogin extends ControllerComHtml implements InterfaceControladorRequisicao
{
   public function processaRequisicao(): void
   {
      echo $this->renderizaHtml(
         'login/formulario.php', 
         [
            'tituloPagina' => 'Entrar',
            'titulo' => 'Login'
         ]
      );
   }
}
