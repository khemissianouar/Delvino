<?php
namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->commande = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\commande", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $commande;

    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\client", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $adresses;

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
     * Add command
     *
     * @param \Ecommerce\EcommerceBundle\Entity\commande $commande
     * @return Utilisateurs
     */
    public function addCommande(\Ecommerce\EcommerceBundle\Entity\Commande $commande)
    {
        $this->commande[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \Ecommerce\EcommerceBundle\Entity\commande $commande
     */
    public function removeCommande(\Ecommerce\EcommerceBundle\Entity\Commande $commands)
    {
        $this->commande->removeElement($commande);
    }

    /**
     * Get commande
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Add adresses
     *
     * @param \Ecommerce\EcommerceBundle\Entity\client $adresses
     * @return Utilisateurs
     */
    public function addAdress(\Ecommerce\EcommerceBundle\Entity\client $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adresses
     *
     * @param \Ecommerce\EcommerceBundle\Entity\client $adresses
     */
    public function removeAdress(\Ecommerce\EcommerceBundle\Entity\client $adresses)
    {
        $this->adresses->removeElement($adresses);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
