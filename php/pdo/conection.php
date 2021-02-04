<?php

$databsePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databsePath);

$pdo->exec('CREATE TABLE students (ID INTEGER PRIMARY KEY, NAME TEXT, BIRTH_DATE TEXT);');

echo 'Conected';