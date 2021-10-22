<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $titre;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_heure_debut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_heure_fin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbpartmax;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $adresse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDateHeureDebut(): ?\DateTimeInterface
    {
        return $this->date_heure_debut;
    }

    public function setDateHeureDebut(\DateTimeInterface $date_heure_debut): self
    {
        $this->date_heure_debut = $date_heure_debut;

        return $this;
    }

    public function getDateHeureFin(): ?\DateTimeInterface
    {
        return $this->date_heure_fin;
    }

    public function setDateHeureFin(\DateTimeInterface $date_heure_fin): self
    {
        $this->date_heure_fin = $date_heure_fin;

        return $this;
    }

    public function getNbpartmax(): ?int
    {
        return $this->nbpartmax;
    }

    public function setNbpartmax(?int $nbpartmax): self
    {
        $this->nbpartmax = $nbpartmax;

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
}