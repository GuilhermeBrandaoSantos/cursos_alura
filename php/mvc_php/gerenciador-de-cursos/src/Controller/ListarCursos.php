<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos extends ControllerComHtml implements InterfaceControladorRequisicao
{

   private $repositorioDeCursos;

   public function __construct()
   {
      $entityManagerCreator = new EntityManagerCreator;
      $entityManager = $entityManagerCreator->getEntityManager();
      $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
   }

   public function processaRequisicao(): void
   {      
      echo $this->renderizaHtml('cursos/listar-cursos.php', [
         'cursos' => $this->repositorioDeCursos->findAll(),
         'tituloPagina' => 'Lista dos cursos',
         'titulo' => 'Listar cursos',
      ]);
   }
}