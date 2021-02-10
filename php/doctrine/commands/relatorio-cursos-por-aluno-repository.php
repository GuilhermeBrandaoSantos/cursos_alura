<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\DBAL\Logging\DebugStack;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunoRepository = $entityManager->getRepository(Aluno::class);

//fazendo debug do que esta sendo executado
$debugStack = new DebugStack();
$entityManager->getConfiguration()->setSQLLogger($debugStack);

$alunosList = $alunoRepository->buscarCursosPorAluno();

foreach ($alunosList as $aluno) {

   $telefones = $aluno
      ->getTelefones()
      ->map(function (Telefone $telefone){
         return $telefone->getNumero();
      })->toArray()
   ;
   echo "ID: {$aluno->getId()}\n";
   echo "Nome: {$aluno->getNome()}\n";
   echo "Telefones: " . implode(',' , $telefones). "\n";

   $cursos = $aluno->getCurso();
   foreach ($cursos as $curso) {
      echo "\tID Curso: {$curso->getId()}\n";
      echo "\tCurso: {$curso->getNome()}\n";
   }
   echo "\n";
}

echo "\n";
foreach ($debugStack->queries as $queryInfo) {
   echo $queryInfo['sql'] . "\n";

}

