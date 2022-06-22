<?php

declare(strict_types = 1);

namespace App\DataFixtures;

use App\Entity\School;
use App\Enum\FixtureEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SchoolFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager): void
    {
        $epsi = new School();
        $epsi->setName('epsi');
        $epsi->setWebsite('https://www.epsi.fr/');
        $epsi->setLogo($this->getReference(FixtureEnum::PICTURE_EPSI_REFERENCE()));
        $manager->persist($epsi);
        $this->addReference(FixtureEnum::SCHOOL_EPSI_REFERENCE(), $epsi);

        $wis = new School();
        $wis->setName('wis');
        $wis->setWebsite('https://www.wis-ecoles.com/');
        $wis->setLogo($this->getReference(FixtureEnum::PICTURE_WIS_REFERENCE()));
        $manager->persist($wis);
        $this->addReference(FixtureEnum::SCHOOL_WIS_REFERENCE(), $wis);

        $mds = new School();
        $mds->setName('my digital School');
        $mds->setWebsite('https://www.mydigitalschool.com/');
        $mds->setLogo($this->getReference(FixtureEnum::PICTURE_MYDIGITALSCHOOL_REFERENCE()));
        $manager->persist($mds);
        $this->addReference(FixtureEnum::SCHOOL_MYDIGITALSCHOOL_REFERENCE(), $mds);

        $digitalCampus = new School();
        $digitalCampus->setName('digital campus');
        $digitalCampus->setWebsite('https://www.digital-campus.fr/');
        $digitalCampus->setLogo($this->getReference(FixtureEnum::PICTURE_DIGITALCAMPUS_REFERENCE()));
        $manager->persist($digitalCampus);
        $this->addReference(FixtureEnum::SCHOOL_DIGITALCAMPUS_REFERENCE(), $digitalCampus);

        $eni = new School();
        $eni->setName('eni');
        $eni->setWebsite('https://www.eni.fr/');
        $eni->setLogo($this->getReference(FixtureEnum::PICTURE_ENI_REFERENCE()));
        $manager->persist($eni);
        $this->addReference(FixtureEnum::SCHOOL_ENI_REFERENCE(), $eni);

        $mjm = new School();
        $mjm->setName('mjm design');
        $mjm->setWebsite('https://www.mjm-design.com/');
        $mjm->setLogo($this->getReference(FixtureEnum::PICTURE_MJM_REFERENCE()));
        $manager->persist($mjm);
        $this->addReference(FixtureEnum::SCHOOL_MJM_REFERENCE(), $mjm);

        $ecole301 = new School();
        $ecole301->setName('école 301');
        $ecole301->setWebsite('https://www.301-digital.com/');
        $ecole301->setLogo($this->getReference(FixtureEnum::PICTURE_ECOLE301_REFERENCE()));
        $manager->persist($ecole301);
        $this->addReference(FixtureEnum::SCHOOL_ECOLE301_REFERENCE(), $ecole301);

        $epitech = new School();
        $epitech->setName('epitech');
        $epitech->setWebsite('https://www.epitech.eu/fr/ecole-informatique-rennes/');
        $epitech->setLogo($this->getReference(FixtureEnum::PICTURE_EPITECH_REFERENCE()));
        $manager->persist($epitech);
        $this->addReference(FixtureEnum::SCHOOL_EPITECH_REFERENCE(), $epitech);

        $supdevinci = new School();
        $supdevinci->setName('sup de vinci');
        $supdevinci->setWebsite('https://www.supdevinci.fr/campus-rennes-supdevinci/');
        $supdevinci->setLogo($this->getReference(FixtureEnum::PICTURE_SUPDEVINCI_REFERENCE()));
        $manager->persist($supdevinci);
        $this->addReference(FixtureEnum::SCHOOL_SUPDEVINCI_REFERENCE(), $supdevinci);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            PictureFixtures::class,
        ];
    }
}
