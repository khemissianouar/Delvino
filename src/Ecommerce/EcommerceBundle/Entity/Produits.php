<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table("produits")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\ProduitsRepository")
 */
class Produits
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
        * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\type", cascade={"persist","remove"})
        * @ORM\JoinColumn(nullable=false)
        */
       private $type;
       /**
           * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\region", cascade={"persist","remove"})
           * @ORM\JoinColumn(nullable=false)
           */
        private $region;
          /**
              * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\couleur", cascade={"persist","remove"})
              * @ORM\JoinColumn(nullable=false)
              */
         private $couleur;
             /**
                 * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\gout", cascade={"persist","remove"})
                 * @ORM\JoinColumn(nullable=false)
                 */
          private $gout;
                /**
                    * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\alcool", cascade={"persist","remove"})
                    * @ORM\JoinColumn(nullable=false)
                    */
          private $alcool;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;


    /**
        * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\tva", cascade={"persist","remove"})
        * @ORM\JoinColumn(nullable=false)
        */
       private $tva;
       /**
           * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\media", cascade={"persist","remove"})
           * @ORM\JoinColumn(nullable=false)
           */
          private $image;


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
     * Set nom
     *
     * @param string $nom
     * @return Produits
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     * @return Produits
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set tva
     *
     * @param \Ecommerce\EcommerceBundle\Entity\tva $tva
     *
     * @return Produits
     */
    public function setTva(\Ecommerce\EcommerceBundle\Entity\tva $tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return float
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Produits
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Set region
     *
     * @param string $region
     *
     * @return Produits
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set gout
     *
     * @param string $gout
     *
     * @return Produits
     */
    public function setGout($gout)
    {
        $this->gout = $gout;

        return $this;
    }

    /**
     * Get gout
     *
     * @return string
     */
    public function getGout()
    {
        return $this->gout;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Produits
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }


    /**
     * Set alcool
     *
     * @param \Ecommerce\EcommerceBundle\Entity\alcool $alcool
     *
     * @return Produits
     */
    public function setAlcool(\Ecommerce\EcommerceBundle\Entity\alcool $alcool)
    {
        $this->alcool = $alcool;

        return $this;
    }

    /**
     * Get alcool
     *
     * @return \Ecommerce\EcommerceBundle\Entity\alcool
     */
    public function getAlcool()
    {
        return $this->alcool;
    }

    /**
     * Set image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\media $image
     *
     * @return Produits
     */
    public function setImage(\Ecommerce\EcommerceBundle\Entity\media $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Ecommerce\EcommerceBundle\Entity\media
     */
    public function getImage()
    {
        return $this->image;
    }
}
