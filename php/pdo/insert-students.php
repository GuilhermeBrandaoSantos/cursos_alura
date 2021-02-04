<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new Student(
    null,
    'Sati Anjo',
    new \DateTimeImmutable('1993-05-23')
);

$insertStudentsQuery = "INSERT INTO students (NAME, BIRTH_DATE) VALUES(:name, :birth_date);";
$insertStudents = $pdo->prepare($insertStudentsQuery);
$insertStudents->bindValue(':name', $student->name());
$insertStudents->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if ($insertStudents->execute()) {
    echo 'Inserido com sucesso';
}