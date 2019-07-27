<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MesDocs", mappedBy="userId")
     */
    private $mesDocs;

    public function __construct()
    {
        $this->mesDocs = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|MesDocs[]
     */
    public function getMesDocs(): Collection
    {
        return $this->mesDocs;
    }

    public function addMesDoc(MesDocs $mesDoc): self
    {
        if (!$this->mesDocs->contains($mesDoc)) {
            $this->mesDocs[] = $mesDoc;
            $mesDoc->setUserId($this);
        }

        return $this;
    }

    public function removeMesDoc(MesDocs $mesDoc): self
    {
        if ($this->mesDocs->contains($mesDoc)) {
            $this->mesDocs->removeElement($mesDoc);
            // set the owning side to null (unless already changed)
            if ($mesDoc->getUserId() === $this) {
                $mesDoc->setUserId(null);
            }
        }

        return $this;
    }

}
