<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typecompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroagence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rib;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numerocompte;

    /**
     * @ORM\Column(type="integer")
     */
    private $montantinitial;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $salaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profession;

     /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fraiscompte;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $agios;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypecompte(): ?string
    {
        return $this->typecompte;
    }

    public function setTypecompte(string $typecompte): self
    {
        $this->typecompte = $typecompte;

        return $this;
    }

    public function getNumeroagence(): ?string
    {
        return $this->numeroagence;
    }

    public function setNumeroagence(string $numeroagence): self
    {
        $this->numeroagence = $numeroagence;

        return $this;
    }

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(string $rib): self
    {
        $this->rib = $rib;

        return $this;
    }

    public function getNumerocompte(): ?string
    {
        return $this->numerocompte;
    }

    public function setNumerocompte(string $numerocompte): self
    {
        $this->numerocompte = $numerocompte;

        return $this;
    }

    public function getMontantinitial(): ?int
    {
        return $this->montantinitial;
    }

    public function setMontantinitial(int $montantinitial): self
    {
        $this->montantinitial = $montantinitial;

        return $this;
    }

    public function getSalaire(): ?int
    {
        return $this->salaire;
    }

    public function setSalaire(?int $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getFraiscompte(): ?int
    {
        return $this->fraiscompte;
    }

    public function setFraiscompte(?int $fraiscompte): self
    {
        $this->fraiscompte = $fraiscompte;

        return $this;
    }

    public function getAgios(): ?int
    {
        return $this->agios;
    }

    public function setAgios(?int $agios): self
    {
        $this->agios = $agios;

        return $this;
    }
}
