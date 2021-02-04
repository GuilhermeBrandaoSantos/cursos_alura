<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$getStudentsList = $pdo->query("SELECT * FROM students");

$studentsList = $getStudentsList->fetchAll(PDO::FETCH_ASSOC);

var_dump($studentsList);