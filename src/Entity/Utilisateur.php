<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 */

use ApiPlatform\Core\Annotation\ApiResource;
/*
    * @ApiResource()
    * @ORM\Entity(repositoryClass="App\Repository\Utilisateur")
    …
   */

class Utilisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="email_utilisateur", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emailUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="role_utilisateur", type="string", length=255, nullable=false)
     */
    private $roleUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=190, nullable=false)
     */
    private $motDePasse;

    public function getEmailUtilisateur(): ?string
    {
        return $this->emailUtilisateur;
    }

    public function getRoleUtilisateur(): ?string
    {
        return $this->roleUtilisateur;
    }

    public function setRoleUtilisateur(string $roleUtilisateur): self
    {
        $this->roleUtilisateur = $roleUtilisateur;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }
}
