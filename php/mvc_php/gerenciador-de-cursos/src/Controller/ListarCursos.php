<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos implements InterfaceControladorRequisicao
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
      $cursos = $this->repositorioDeCursos->findAll();
      $tituloDaPagina = "Lista dos cursos";
      $tituloH1 = "Listar cursos";
      require __DIR__ . '../../../view/cursos/listar-cursos.php';
   }
}