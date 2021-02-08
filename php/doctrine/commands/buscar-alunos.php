<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunoList */
$alunoList = $alunoRepository->findAll();

//listando todos os alunos
foreach ($alunoList as $aluno) {
   echo "ID: {$aluno->getId()} - Nome: {$aluno->getNome()}\n";
}

//buscando por ID
$alunoA = $alunoRepository->find(3);
echo "\n" . $alunoA->getNome(). "\n\n";

//busca por filtro (construindo com um array)
$alunoB = $alunoRepository->findBy([
   'nome' => 'Sati Anjo'
]);
// ou (construindo sem um array)
$alunoC = $alunoRepository->findOneBy([
   'nome' => 'Sati Anjo'
]);

var_dump($alunoB);
var_dump($alunoC);