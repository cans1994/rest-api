<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Categorie
 *
 * @ORM\Table(name="categorie", indexes={@ORM\Index(name="id_categorie_genre", columns={"id_categorie_genre"})})
 
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Categorie")
    
 */

class Categorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_categorie", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nomCategorie;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie_genre", referencedColumnName="categorie_genre")
     * })
     */
    private $idCategorieGenre;

    public function getNomCategorie(): ?string
    {
        return $this->nomCategorie;
    }

    public function getIdCategorieGenre(): ?Genre
    {
        return $this->idCategorieGenre;
    }

    public function setIdCategorieGenre(?Genre $idCategorieGenre): self
    {
        $this->idCategorieGenre = $idCategorieGenre;

        return $this;
    }
}
