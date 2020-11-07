<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
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
    private $statutclient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeclient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomemployeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $raisonsociale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresseemployeur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatutclient(): ?string
    {
        return $this->statutclient;
    }

    public function setStatutclient(string $statutclient): self
    {
        $this->statutclient = $statutclient;

        return $this;
    }

    public function getTypeclient(): ?string
    {
        return $this->typeclient;
    }

    public function setTypeclient(string $typeclient): self
    {
        $this->typeclient = $typeclient;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getNomemployeur(): ?string
    {
        return $this->nomemployeur;
    }

    public function setNomemployeur(?string $nomemployeur): self
    {
        $this->nomemployeur = $nomemployeur;

        return $this;
    }

    public function getRaisonsociale(): ?string
    {
        return $this->raisonsociale;
    }

    public function setRaisonsociale(?string $raisonsociale): self
    {
        $this->raisonsociale = $raisonsociale;

        return $this;
    }

    public function getAdresseemployeur(): ?string
    {
        return $this->adresseemployeur;
    }

    public function setAdresseemployeur(?string $adresseemployeur): self
    {
        $this->adresseemployeur = $adresseemployeur;

        return $this;
    }
}
