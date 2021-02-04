<?php

require_once 'vendor/autoload.php';

$databsePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databsePath);

$getStudentsList = $pdo->query("SELECT * FROM students");

$studentsList = $getStudentsList->fetchAll();

var_dump($studentsList);