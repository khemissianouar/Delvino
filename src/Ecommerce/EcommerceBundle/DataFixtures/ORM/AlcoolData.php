<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\alcool;

class AlcoolData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $alcool1 = new alcool();
        $alcool1->setNom("Moins de 12 %");
        $manager->persist($alcool1);
        $alcool2 = new alcool();
        $alcool2->setNom("De 12 % à 13.5 %");
        $manager->persist($alcool2);
        $alcool3 = new alcool();
        $alcool3->setNom("Plus de 13.5 %");
        $manager->persist($alcool3);
        $manager->flush();
        $this->addReference('alcool1', $alcool1);
        $this->addReference('alcool2', $alcool2);
        $this->addReference('alcool3', $alcool3);
    }

    public function getOrder()
    {
        return 8;
    }
}
