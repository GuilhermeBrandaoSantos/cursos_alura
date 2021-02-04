<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databsePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databsePath);

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