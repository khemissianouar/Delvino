<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Ecommerce\EcommerceBundle\Entity\media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media2 = new media();
        $media2->setPath('http://avis-vin.lefigaro.fr/var/img/102/25341-650x330-vin-rouge-igor-klimov--fotolia.jpg');
        $media2->setAlt('vin');
        $manager->persist($media2);

        $media3 = new media();
        $media3->setPath('https://static.pratique.fr/images/unsized/co/conservation-bouteille-vin.jpg');
        $media3->setAlt('vin');
        $manager->persist($media3);

        $media4 = new media();
        $media4->setPath('https://www.vinatis.com/28161-detail_default/gigondas-2012-domaine-de-la-guintrandy.png');
        $media4->setAlt('Bourgogne');
        $manager->persist($media4);

        $media5 = new media();
        $media5->setPath('https://www.vinatis.com/29009-fine_default/chateau-peyrassol-rose-2016.png');
        $media5->setAlt('Bourgogne');
        $manager->persist($media5);

        $media6 = new media();
        $media6->setPath('https://www.vinatis.com/27836-detail_default/macon-la-roche-vineuse-2015-olivier-merlin.png');
        $media6->setAlt('Bourgogne');
        $manager->persist($media6);


        $manager->flush();

        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);

    }

    public function getOrder()
    {
        return 1;
    }

}
