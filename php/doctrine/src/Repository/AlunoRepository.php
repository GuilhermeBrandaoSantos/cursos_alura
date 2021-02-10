<?php

namespace Alura\Doctrine\Repository;

use Alura\Doctrine\Entity\Aluno;
use Doctrine\ORM\EntityRepository;

class AlunoRepository extends EntityRepository
{
   public function buscarCursosPorAluno()
   {

      $query = $this
         ->createQueryBuilder('aluno')
         ->join('aluno.telefones', 'telefones')
         ->join('aluno.cursos', 'cursos')
         ->addSelect('telefones')
         ->addSelect('cursos')
         ->getQuery()
      ;
      return $query->getResult();
   }
}
