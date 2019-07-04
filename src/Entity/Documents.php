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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(name="name", type="string", length=100)
     * @Assert\NotBlank()
     * 
     */
    private $name;
    /**
     * @ORM\Column(name="categorie", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $categorie;
    /**
     * @ORM\Column(name="number", type="int", length=100)
     * @Assert\NotBlank()
     */
    private $number;
    /**
     * @ORM\Column(name="userId")
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="Documents")
     */
    private $userId;
    /**
     * @Assert\DateTime()
     * @ORM\Column(name="creationDate", type="datetime")
     */
    private $creationDate;
    /**
     * @Assert\DateTime()
     * @ORM\Column(name="updateDate", type="datetime")
     * @ORM\Column(nullable=false)
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
     * @return mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    } 

    /**
     * @return mixed
     */
    public function getNumber()
     {
         return $this->number;
     }

     /**
     * @return mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @return mixed $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = new \DateTime();
    }

     /**
     * @return mixed
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

      /**
     * @return mixed $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = new \DateTim();
    }
}
?>