<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databsePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databsePath);

$student = new Student(
    null,
    'Guilherme Brandão',
    new \DateTimeImmutable('1996-04-04')
);

$sqlInsert = "INSERT INTO students (NAME, BIRTH_DATE) VALUES('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));