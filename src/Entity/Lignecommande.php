<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignecommande
 *
 * @ORM\Table(name="lignecommande", indexes={@ORM\Index(name="fk_ligne_produit", columns={"idProduit"}), @ORM\Index(name="fk_ligne_commande", columns={"idCommande"})})
 * @ORM\Entity(repositoryClass="App\Repository\LignecommandeRepository")
 */
class Lignecommande
{
    /**
     * @var int
     *
     * @ORM\Column(name="idLigne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $idligne;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCommande", referencedColumnName="idCommande")
     * })
     * @Assert\NotNull(message="Champ obligatoire")
     */
    private $idcommande;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduit", referencedColumnName="reference")
     * })
     * @Assert\NotNull(message="Champ obligatoire")
     */
    private $idproduit;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     * @Assert\NotNull(message="Champ obligatoire")
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     * @Assert\NotNull(message="Champ obligatoire")
     */
    private $prix;

    public function getIdligne(): ?int
    {
        return $this->idligne;
    }

    public function getIdcommande(): ?Commande
    {
        return $this->idcommande;
    }

    public function setIdcommande(Commande $idcommande) : self
    {
        $this->idcommande=$idcommande;

        return $this;
    }

    public function getIdproduit(): ?Produit
    {
        return $this->idproduit;
    }

    public function setIdproduit(Produit $idproduit): self
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }


}
