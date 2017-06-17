<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;;
use Ecommerce\EcommerceBundle\Entity\region;

class RegionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
      $region1 = new region();
      $region1->setNom('Rhone');
      $manager->persist($region1);
        $region2 = new region();
        $region2->setNom('Bordeaux');
        $manager->persist($region2);

        $region3 = new region();
        $region3->setNom("Sud-Ouest");
        $manager->persist($region3);
        $manager->flush();

        $this->addReference('region2', $region2);
        $this->addReference('region3', $region3);
          $this->addReference('region1', $region1);
    }

    public function getOrder()
    {
        return 4;
    }
}
