<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\couleur;

class CouleurData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $couleur1 = new couleur();
        $couleur1->setNom("Rouge");
        $manager->persist($couleur1);
        $couleur2 = new couleur();
        $couleur2->setNom("Blanc");
        $manager->persist($couleur2);
        $couleur3 = new couleur();
        $couleur3->setNom("Rosé");
        $manager->persist($couleur3);
        $manager->flush();
        $this->addReference('couleur1', $couleur1);
        $this->addReference('couleur2', $couleur2);
        $this->addReference('couleur3', $couleur3);
    }

    public function getOrder()
    {
        return 7;
    }
}
