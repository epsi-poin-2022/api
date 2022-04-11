<?php

declare(strict_types = 1);

namespace App\DataFixtures;

use App\Entity\JobTitle;
use App\Enum\FixtureEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class JobTitleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $developer = new JobTitle();
        $developer->setLabel('développeur');
        $developer->setIsDefault(true);
        $manager->persist($developer);
        $this->addReference(FixtureEnum::JOB_TITLE_DEVELOPPER_REFERENCE,$developer);

        $developerBackEnd = new JobTitle();
        $developerBackEnd->setLabel('développeur back-end');
        $developerBackEnd->setIsDefault(false);
        $manager->persist($developerBackEnd);
        $this->addReference(FixtureEnum::JOB_TITLE_DEVELOPPER_BACK_END_REFERENCE,$developerBackEnd);

        $developerFrontEnd = new JobTitle();
        $developerFrontEnd->setLabel('développeur front-end');
        $developerFrontEnd->setIsDefault(false);
        $manager->persist($developerFrontEnd);
        $this->addReference(FixtureEnum::JOB_TITLE_DEVELOPPER_FRONT_END_REFERENCE,$developerFrontEnd);

        $developerFullstack = new JobTitle();
        $developerFullstack->setLabel('développeur full-stack');
        $developerFullstack->setIsDefault(false);
        $manager->persist($developerFullstack);
        $this->addReference(FixtureEnum::JOB_TITLE_DEVELOPPER_FULL_STACK_REFERENCE,$developerFullstack);

        $designer = new JobTitle();
        $designer->setLabel('désigner UX/UI');
        $designer->setIsDefault(true);
        $manager->persist($designer);
        $this->addReference(FixtureEnum::JOB_TITLE_DESIGNER_REFERENCE,$designer);

        $designerUx = new JobTitle();
        $designerUx->setLabel('désigner UX');
        $designerUx->setIsDefault(false);
        $manager->persist($designerUx);
        $this->addReference(FixtureEnum::JOB_TITLE_DESIGNER_UX_REFERENCE,$designerUx);

        $designerUi = new JobTitle();
        $designerUi->setLabel('désigner UI');
        $designerUi->setIsDefault(false);
        $manager->persist($designerUi);
        $this->addReference(FixtureEnum::JOB_TITLE_DESIGNER_UI_REFERENCE,$designerUi);

        $manager->flush();
    }
}
