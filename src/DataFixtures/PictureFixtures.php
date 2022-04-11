<?php

namespace App\DataFixtures;

use App\Entity\Picture;
use App\Enum\FixtureEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PictureFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager): void
    {
        $epsi = new Picture();
        $epsi->setFile('epsi.png');
        $epsi->setFilePath('http://127.0.0.1/uploads/epsi.png');
        $manager->persist($epsi);
        $this->addReference(FixtureEnum::PICTURE_EPSI_REFERENCE, $epsi);

        $wis = new Picture();
        $wis->setFile('wis_300.png');
        $wis->setFilePath('http://127.0.0.1/uploads/wis_300.png');
        $manager->persist($wis);
        $this->addReference(FixtureEnum::PICTURE_WIS_REFERENCE, $wis);

        $mds = new Picture();
        $mds->setFile('mds.png');
        $mds->setFilePath('http://127.0.0.1/uploads/mds.png');
        $manager->persist($mds);
        $this->addReference(FixtureEnum::PICTURE_MYDIGITALSCHOOL_REFERENCE, $mds);

        $digitalCampus = new Picture();
        $digitalCampus->setFile('logo-digital-campus.svg');
        $digitalCampus->setFilePath('http://127.0.0.1/uploads/logo-digital-campus.svg');
        $manager->persist($digitalCampus);
        $this->addReference(FixtureEnum::PICTURE_DIGITALCAMPUS_REFERENCE, $digitalCampus);

        $eni = new Picture();
        $eni->setFile('eni.jpg');
        $eni->setFilePath('http://127.0.0.1/uploads/eni.jpg');
        $manager->persist($eni);
        $this->addReference(FixtureEnum::PICTURE_ENI_REFERENCE, $eni);

        $mjm = new Picture();
        $mjm->setFile('logo-mjm-design.png');
        $mjm->setFilePath('http://127.0.0.1/uploads/logo-mjm-design.png');
        $manager->persist($mjm);
        $this->addReference(FixtureEnum::PICTURE_MJM_REFERENCE, $mjm);

        $ecole301 = new Picture();
        $ecole301->setFile('logo-stage-301.svg');
        $ecole301->setFilePath('http://127.0.0.1/uploads/logo-stage-301.svg');
        $manager->persist($ecole301);
        $this->addReference(FixtureEnum::PICTURE_ECOLE301_REFERENCE, $ecole301);

        $epitech = new Picture();
        $epitech->setFile('Epitech.webp');
        $epitech->setFilePath('http://127.0.0.1/uploads/Epitech.webp');
        $manager->persist($epitech);
        $this->addReference(FixtureEnum::PICTURE_EPITECH_REFERENCE, $epitech);

        $supdevinci = new Picture();
        $supdevinci->setFile('supdevinci-logo.png');
        $supdevinci->setFilePath('http://127.0.0.1/uploads/supdevinci-logo.png');
        $manager->persist($supdevinci);
        $this->addReference(FixtureEnum::PICTURE_SUPDEVINCI_REFERENCE, $supdevinci);

        $developer = new Picture();
        $developer->setFile('pexels-pixabay-276452.jpg');
        $developer->setFilePath('http://127.0.0.1/uploads/pexels-pixabay-276452.jpg');
        $manager->persist($developer);
        $this->addReference(FixtureEnum::PICTURE_DEVELOPPER_REFERENCE, $developer);

        $designer = new Picture();
        $designer->setFile('ux-787980_960_720.webp');
        $designer->setFilePath('http://127.0.0.1/uploads/ux-787980_960_720.webp');
        $manager->persist($designer);
        $this->addReference(FixtureEnum::PICTURE_DESIGNER_REFERENCE, $designer);
    }
}
