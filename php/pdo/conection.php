<?php

$pdo = new PDO('mysql:host=localhost;dbname=alura_pdo', 'root', '');

echo 'Conected';

// $phones = $pdo->query("SELECT * FROM phones");
// var_dump($phones->fetch());
// // $pdo->exec("INSERT INTO phones (AREA_CODE, NUMBER, STUDENT_ID) VALUES('11', '985029073', 1), ('11', '951325489', 1)");
// exit();


try {   
    $tableList = array();
    $result = $pdo->query("SHOW TABLES");
    while ($row = $result->fetch(PDO::FETCH_NUM)) {
        $tableList[] = $row[0];
    }
    print_r($tableList);
}
catch (PDOException $e) {
    echo $e->getMessage();
}

