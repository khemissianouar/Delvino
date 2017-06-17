<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Commande;

class CommandeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $commande1 = new Commande();
        $commande1->setUtilisateur($this->getReference('utilisateur1'));
        $commande1->setValide('1');
        $commande1->setDate(new \DateTime());
        $commande1->setReference('1');

        $manager->persist($commande1);
        $commande2 = new Commande();
        $commande2->setUtilisateur($this->getReference('utilisateur1'));
        $commande2->setValide('1');
        $commande2->setDate(new \DateTime());
        $commande2->setReference('2');

        $manager->persist($commande2);

        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }
}
