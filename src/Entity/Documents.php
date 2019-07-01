<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="documents")
 */
class Documents {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GenerateValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     * 
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    private $categorie;
    /**
     * @ORM\Column(type="int", length=100)
     * @Assert\NotBlank()
     */
    private $number;
    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="Documents")
     */
    private $userId;
    /**
     * @Assert\DateTime()
     * @ORM\Column(type="datetime")
     */
    private $creationDate;
    /**
     * @Assert\DateTime()
     * @ORM\Column(type="datetime")
     */
    private $updateDate;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */

     public function getName()
     {
         return $this->name;
     }

     /**
     * @return mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @return mixed $description
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }  
}
?>