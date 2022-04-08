<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Emprunteur
 *
 * @ORM\Table(name="emprunteur", indexes={@ORM\Index(name="email_utilisateur", columns={"email_utilisateur"})})

 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Emprunteur")
    
 */

class Emprunteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_emprunteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmprunteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_emprunteur", type="string", length=190, nullable=false)
     */
    private $nomEmprunteur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_emprunteur", type="string", length=255, nullable=false)
     */
    private $prenomEmprunteur;

    /**
     * @var int
     *
     * @ORM\Column(name="num_tel", type="integer", nullable=false)
     */
    private $numTel;

    /**
     * @var bool
     *
     * @ORM\Column(name="emprunteur_actif", type="boolean", nullable=false)
     */
    private $emprunteurActif;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="email_utilisateur", referencedColumnName="email_utilisateur")
     * })
     */
    private $emailUtilisateur;

    public function getIdEmprunteur(): ?int
    {
        return $this->idEmprunteur;
    }

    public function getNomEmprunteur(): ?string
    {
        return $this->nomEmprunteur;
    }

    public function setNomEmprunteur(string $nomEmprunteur): self
    {
        $this->nomEmprunteur = $nomEmprunteur;

        return $this;
    }

    public function getPrenomEmprunteur(): ?string
    {
        return $this->prenomEmprunteur;
    }

    public function setPrenomEmprunteur(string $prenomEmprunteur): self
    {
        $this->prenomEmprunteur = $prenomEmprunteur;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(int $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getEmprunteurActif(): ?bool
    {
        return $this->emprunteurActif;
    }

    public function setEmprunteurActif(bool $emprunteurActif): self
    {
        $this->emprunteurActif = $emprunteurActif;

        return $this;
    }

    public function getEmailUtilisateur(): ?Utilisateur
    {
        return $this->emailUtilisateur;
    }

    public function setEmailUtilisateur(?Utilisateur $emailUtilisateur): self
    {
        $this->emailUtilisateur = $emailUtilisateur;

        return $this;
    }
}
