<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$repositoy = new PdoStudentRepository($connection);

$connection->beginTransaction();

$aStudent = new Student(
    null,
    'Ricardo Mota',
    new DateTimeImmutable('1994-02-09')
);

$repositoy->save($aStudent);

$bStudent = new Student(
    null,
    'Jhonny Rohr',
    new DateTimeImmutable('1989-09-30')
);

$repositoy->save($bStudent);

$connection->commit();