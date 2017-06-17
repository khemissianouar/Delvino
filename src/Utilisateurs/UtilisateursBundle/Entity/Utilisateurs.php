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
          $this->adresse = new \Doctrine\Common\Collections\ArrayCollection();
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
    private $adresse;


    /**
     * Add commande
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commande $commande
     *
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
     * @param \Ecommerce\EcommerceBundle\Entity\Commande $commande
     */
    public function removeCommande(\Ecommerce\EcommerceBundle\Entity\Commande $commande)
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
     * Add adresse
     *
     * @param \Ecommerce\EcommerceBundle\Entity\client $adresse
     *
     * @return Utilisateurs
     */
    public function addAdresse(\Ecommerce\EcommerceBundle\Entity\client $adresse)
    {
        $this->adresse[] = $adresse;

        return $this;
    }

    /**
     * Remove adresse
     *
     * @param \Ecommerce\EcommerceBundle\Entity\client $adresse
     */
    public function removeAdresse(\Ecommerce\EcommerceBundle\Entity\client $adresse)
    {
        $this->adresse->removeElement($adresse);
    }

    /**
     * Get adresse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
