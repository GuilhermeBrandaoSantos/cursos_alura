<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Guilherme Brandão',
    new \DateTimeImmutable('1996-04-04')
);

echo $student->age();
