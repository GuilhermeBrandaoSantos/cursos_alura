<?php

namespace Alura\Doctrine\Entity;

/**
 * @Entity
 */
class Curso
{
   /**
    * @id
    * @GeneratedValue
    * @Column (type="integer")
    */
   private $id;

   /**
    * @Column (type="string")
    */
   private $nome;

   public function getId(): int
   {
      return $this->id;
   }

   public function getNome(): string
   {
      return $this->nome;
   }

   public function setNome($nome): self
   {
      $this->nome = $nome;
      return $this;
   }
}
