<?php
namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Edicao extends ControllerComHtml implements InterfaceControladorRequisicao
{      
   /**
   * @var \Doctrine\Common\Persistence\ObjectRepository
   */
   private $repositorioCurso;

   public function __construct()
   {
      $entityManager = (new EntityManagerCreator())->getEntityManager();
      $this->repositorioCurso = $entityManager->getRepository(Curso::class);
   }
   public function processaRequisicao():void
   {
      $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); 

      if (is_null($id) || $id == false) {
         header('Location: /listar-cursos');
         return;
      }

      $curso = $this->repositorioCurso->find($id);

      echo $this->renderizaHtml(
         'cursos/formulario-add-curso.php', 
         [
            'curso' => $curso,
            'tituloPagina' => 'Editar Curso',
            'titulo' =>  'Editar curso ' . $curso->getDescricao()        
         ]
      );      
   }
}