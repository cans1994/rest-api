<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Livre
 *
 * @ORM\Table(name="livre", indexes={@ORM\Index(name="id_auteur", columns={"id_auteur"}), @ORM\Index(name="id_genre", columns={"id_genre"})})
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Livre")
 */

class Livre
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre_du_livre", type="string", length=255, nullable=false)
     */
    private $titreDuLivre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee_edition", type="date", nullable=false)
     */
    private $anneeEdition;

    /**
     * @var \Auteur
     *
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_auteur", referencedColumnName="id_auteur")
     * })
     */
    private $idAuteur;

    /**
     * @var \Emprunt
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Emprunt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_isbn", referencedColumnName="code_isbn")
     * })
     */
    private $codeIsbn;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_genre", referencedColumnName="id_genre")
     * })
     */
    private $idGenre;

    public function getTitreDuLivre(): ?string
    {
        return $this->titreDuLivre;
    }

    public function setTitreDuLivre(string $titreDuLivre): self
    {
        $this->titreDuLivre = $titreDuLivre;

        return $this;
    }

    public function getAnneeEdition(): ?\DateTimeInterface
    {
        return $this->anneeEdition;
    }

    public function setAnneeEdition(\DateTimeInterface $anneeEdition): self
    {
        $this->anneeEdition = $anneeEdition;

        return $this;
    }

    public function getIdAuteur(): ?Auteur
    {
        return $this->idAuteur;
    }

    public function setIdAuteur(?Auteur $idAuteur): self
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }

    public function getCodeIsbn(): ?Emprunt
    {
        return $this->codeIsbn;
    }

    public function setCodeIsbn(?Emprunt $codeIsbn): self
    {
        $this->codeIsbn = $codeIsbn;

        return $this;
    }

    public function getIdGenre(): ?Genre
    {
        return $this->idGenre;
    }

    public function setIdGenre(?Genre $idGenre): self
    {
        $this->idGenre = $idGenre;

        return $this;
    }
}
