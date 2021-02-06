<?php

use Alura\Doctrine\Helper\EntityManagerFactory;

require "vendor/autoload.php";

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

var_dump($entityManager->getConnection());