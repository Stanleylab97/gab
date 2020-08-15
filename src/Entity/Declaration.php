<?php

namespace App\Entity;

use App\Repository\DeclarationRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=DeclarationRepository::class)
 * @ORM\Table(name="declarations")
 */
class Declaration
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $civility;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenoms;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numContrat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numClient;

    /**
     * @ORM\Column(type="date")
     */
    private $dateSin;

    /**
     * @ORM\Column(type="time")
     */
    private $heureSin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeContrat;

    /**
     * @ORM\Column(type="boolean")
     */
    private $chocked;

    /**
     * @ORM\Column(type="text")
     */
    private $circonstances;

    /**
     * @ORM\Column(type="text")
     */
    private $dommages;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEnreg;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(string $civility): self
    {
        $this->civility = $civility;

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

    public function getPrenoms(): ?string
    {
        return $this->prenoms;
    }

    public function setPrenoms(string $prenoms): self
    {
        $this->prenoms = $prenoms;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNumContrat(): ?string
    {
        return $this->numContrat;
    }

    public function setNumContrat(string $numContrat): self
    {
        $this->numContrat = $numContrat;

        return $this;
    }

    public function getNumClient(): ?string
    {
        return $this->numClient;
    }

    public function setNumClient(string $numClient): self
    {
        $this->numClient = $numClient;

        return $this;
    }

    public function getDateSin(): ?\DateTime
    {
        return $this->dateSin;
    }

    public function setDateSin(\DateTime $dateSin): self
    {
        $this->dateSin = $dateSin;

        return $this;
    }

    public function getHeureSin(): ?\DateTimeInterface
    {
        return $this->heureSin;
    }

    public function setHeureSin(\DateTimeInterface $heureSin): self
    {
        $this->heureSin = $heureSin;

        return $this;
    }

    public function getAgence(): ?string
    {
        return $this->agence;
    }

    public function setAgence(?string $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(string $typeContrat): self
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    public function getChocked(): ?bool
    {
        return $this->chocked;
    }

    public function setChocked(bool $chocked): self
    {
        $this->chocked = $chocked;

        return $this;
    }

    public function getCirconstances(): ?string
    {
        return $this->circonstances;
    }

    public function setCirconstances(string $circonstances): self
    {
        $this->circonstances = $circonstances;

        return $this;
    }

    public function getDommages(): ?string
    {
        return $this->dommages;
    }

    public function setDommages(string $dommage): self
    {
        $this->dommages = $dommage;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getDateEnreg(): ?\DateTimeInterface
    {
        return $this->dateEnreg;
    }

    public function setDateEnreg(\DateTimeInterface $dateEnreg): self
    {
        $this->dateEnreg = $dateEnreg;

        return $this;
    }
}
