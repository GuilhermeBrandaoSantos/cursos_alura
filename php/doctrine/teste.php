<?php

try{
   // Faz conexão com banco de daddos
   $conn = new PDO('mysql:host=localhost;dbname=alura_doctrine', 'root', '');
   echo "Conectei";
   }catch(PDOException $e){
   // Caso ocorra algum erro na conexão com o banco, exibe a mensagem
   echo 'Falha ao conectar no banco de dados: '.$e->getMessage();
   
}

// phpinfo();

// foreach(PDO::getAvailableDrivers() as $driver) {
//    echo $driver;
//  }