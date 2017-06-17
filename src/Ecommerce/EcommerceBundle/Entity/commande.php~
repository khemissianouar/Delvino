<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commande
 *
 * @ORM\Table("commande")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\commandeRepository")
 */
class commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", inversedBy="commande")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;


    /**
     * @var boolean
     *
     * @ORM\Column(name="valide", type="boolean")
     */
    private $valide;

    /**
     * @var integer
     *
     * @ORM\Column(name="reference", type="integer")
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set valide
     *
     * @param boolean $valide
     *
     * @return commade
     */
    public function setValide($valide)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return boolean
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * Set reference
     *
     * @param integer $reference
     *
     * @return commade
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return integer
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return commade
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set utilisateur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur
     *
     * @return commande
     */
    public function setUtilisateur(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
