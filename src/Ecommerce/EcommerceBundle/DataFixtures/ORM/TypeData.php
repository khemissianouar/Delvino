<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ecommerce\EcommerceBundle\Entity\type;

class TypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $type1 = new type();
        $type1->setNom("Vin");
        $manager->persist($type1);
        $type2 = new type();
        $type2->setNom("Spiritueux");
        $manager->persist($type2);
        $type3 = new type();
        $type3->setNom("Cubi");
        $manager->persist($type3);
        $manager->flush();
        $this->addReference('type1', $type1);
        $this->addReference('type2', $type2);
        $this->addReference('type3', $type3);
    }

    public function getOrder()
    {
        return 5;
    }
}
