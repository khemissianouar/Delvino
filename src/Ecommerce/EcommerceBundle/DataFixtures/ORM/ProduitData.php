<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;


class ProduitData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setAlcool($this->getReference('alcool3'));
        $produit1->setDescription("LUn prix tout petit pour un énorme Coup de Cœur de nos sommeliers !!!.");
        $produit1->setDisponible('1');
        $produit1->setTva($this->getReference('tva2'));
        $produit1->setImage($this->getReference('media3'));
        $produit1->setNom(' GIGONDAS 2012 - DOMAINE DE LA GUINTRANDY');
        $produit1->setRegion($this->getReference('region3') );
        $produit1->setType($this->getReference('type3'));
        $produit1->setPrix('9.99');
        $produit1->setGout($this->getReference('gout3'));
        $produit1->setCouleur($this->getReference('couleur3'));




        $manager->persist($produit1);



        $manager->flush();
    }

    public function getOrder()
    {
        return 9;
    }
}
