<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\gout;

class GoutData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $gout1 = new gout();
        $gout1->setNom("fruité");
        $manager->persist($gout1);
        $gout2 = new gout();
        $gout2->setNom("Puissant");
        $manager->persist($gout2);
        $gout3 = new gout();
        $gout3->setNom("Boisé");
        $manager->persist($gout3);
        $manager->flush();
        $this->addReference('gout1', $gout1);
        $this->addReference('gout2', $gout2);
        $this->addReference('gout3', $gout3);
    }

    public function getOrder()
    {
        return 6;
    }
}
