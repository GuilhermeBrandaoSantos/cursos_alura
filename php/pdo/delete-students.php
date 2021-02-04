<?php

require_once 'vendor/autoload.php';

$databsePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databsePath);

$deleteStudentsQuery = "DELETE FROM students WHERE ID = ?;";
$deleteStudents = $pdo->prepare($deleteStudentsQuery);
$deleteStudents->bindValue(1, 2, PDO::PARAM_INT);

var_dump($deleteStudents->execute());
