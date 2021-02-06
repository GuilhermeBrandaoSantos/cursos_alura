<?php 

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;


class EntityManagerFactory
{
   /**
    * @return EntityManagerInterface
    * @throws \Doctrine\ORM\ORMException
    */
   public function getEntityManager(): EntityManagerInterface
   {
      $rootDir = __DIR__ . '/../..';
      $config = Setup::createAnnotationMetadataConfiguration(
         [$rootDir . '/src']
      );

      $connection = [
         'dbname' => 'alura_doctrine',
         'user' => 'user',
         'password' => '',
         'host' => 'localhost',
         'driver' => 'pdo_mysql',
         'path' => $rootDir . '/var/data/banco.sql'
      ];
      return EntityManager::create($connection, $config);
   }
}
