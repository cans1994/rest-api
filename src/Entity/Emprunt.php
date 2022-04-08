<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Emprunt
 *
 * @ORM\Table(name="emprunt", indexes={@ORM\Index(name="code_isbn", columns={"code_isbn"}), @ORM\Index(name="id_emprunteur", columns={"id_emprunteur"})})
 * 
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Emprunt")

 */

class Emprunt
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_emprunt", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dateEmprunt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_retour", type="date", nullable=false)
     */
    private $dateRetour;

    /**
     * @var \Emprunteur
     *
     * @ORM\ManyToOne(targetEntity="Emprunteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_emprunteur", referencedColumnName="id_emprunteur")
     * })
     */
    private $idEmprunteur;

    /**
     * @var \Livre
     *
     * @ORM\ManyToOne(targetEntity="Livre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_isbn", referencedColumnName="code_isbn")
     * })
     */
    private $codeIsbn;

    public function getDateEmprunt(): ?\DateTimeInterface
    {
        return $this->dateEmprunt;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->dateRetour;
    }

    public function setDateRetour(\DateTimeInterface $dateRetour): self
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    public function getIdEmprunteur(): ?Emprunteur
    {
        return $this->idEmprunteur;
    }

    public function setIdEmprunteur(?Emprunteur $idEmprunteur): self
    {
        $this->idEmprunteur = $idEmprunteur;

        return $this;
    }

    public function getCodeIsbn(): ?Livre
    {
        return $this->codeIsbn;
    }

    public function setCodeIsbn(?Livre $codeIsbn): self
    {
        $this->codeIsbn = $codeIsbn;

        return $this;
    }
}
