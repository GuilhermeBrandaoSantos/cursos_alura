<?php

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

require __DIR__ . '/../vendor/autoload.php';

$entityManagerCreator = new EntityManagerCreator;
$entityManager = $entityManagerCreator->getEntityManager();
$repositorioDeCursos = $entityManager->getRepository(Curso::class);
$cursos = $repositorioDeCursos->findAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Listar cursos</h1>
            </div>

            <a href="/novo-curso" class="btn btn-primary mb-2">Novo Curso</a>

            <ul class="list-group">
                <?php foreach ($cursos as $curso) : ?>
                    <li class="list-group-item">
                        <?= $curso->getDescricao(); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>

</html>