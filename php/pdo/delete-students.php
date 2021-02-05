<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$deleteStudentsQuery = "DELETE FROM students WHERE ID = ?;";
$deleteStudents = $pdo->prepare($deleteStudentsQuery);
$deleteStudents->bindValue(1, 11, PDO::PARAM_INT);

var_dump($deleteStudents->execute());
