<?php

declare(strict_types = 1);

namespace App\DataFixtures;

use App\Entity\JobTitle;
use App\Enum\FixtureEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class JobTitleFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        $developer = new JobTitle();
        $developer->setLabel('développeur');
        $developer->setIsDefault(true);
        $manager->persist($developer);
        $this->addReference(FixtureEnum::JOB_TITLE_DEVELOPPER_REFERENCE(),$developer);

        $developerBackEnd = new JobTitle();
        $developerBackEnd->setLabel('développeur back-end');
        $developerBackEnd->setIsDefault(false);
        $manager->persist($developerBackEnd);
        $this->addReference(FixtureEnum::JOB_TITLE_DEVELOPPER_BACK_END_REFERENCE(),$developerBackEnd);

        $developerFrontEnd = new JobTitle();
        $developerFrontEnd->setLabel('développeur front-end');
        $developerFrontEnd->setIsDefault(false);
        $manager->persist($developerFrontEnd);
        $this->addReference(FixtureEnum::JOB_TITLE_DEVELOPPER_FRONT_END_REFERENCE(),$developerFrontEnd);

        $developerFullstack = new JobTitle();
        $developerFullstack->setLabel('développeur full-stack');
        $developerFullstack->setIsDefault(false);
        $manager->persist($developerFullstack);
        $this->addReference(FixtureEnum::JOB_TITLE_DEVELOPPER_FULL_STACK_REFERENCE(),$developerFullstack);

        $cda = new JobTitle();
        $cda->setLabel('DevOPS: Concepteur Développeur d’Applications');
        $cda->setIsDefault(false);
        $manager->persist($cda);
        $this->addReference(FixtureEnum::JOB_TITLE_CDA_REFERENCE(),$cda);

        $developerWeb = new JobTitle();
        $developerWeb->setLabel('Développeur/Développeuse web');
        $developerWeb->setIsDefault(false);
        $manager->persist($developerWeb);
        $this->addReference(FixtureEnum::JOB_TITLE_DEVELOPPER_WEB_REFERENCE(),$developerWeb);

        $designer = new JobTitle();
        $designer->setLabel('désigner UX/UI');
        $designer->setIsDefault(true);
        $manager->persist($designer);
        $this->addReference(FixtureEnum::JOB_TITLE_DESIGNER_REFERENCE(),$designer);

        $designerUx = new JobTitle();
        $designerUx->setLabel('désigner UX');
        $designerUx->setIsDefault(false);
        $manager->persist($designerUx);
        $this->addReference(FixtureEnum::JOB_TITLE_DESIGNER_UX_REFERENCE(),$designerUx);

        $designerUi = new JobTitle();
        $designerUi->setLabel('désigner UI');
        $designerUi->setIsDefault(false);
        $manager->persist($designerUi);
        $this->addReference(FixtureEnum::JOB_TITLE_DESIGNER_UI_REFERENCE(),$designerUi);

        $networkAdministrator = new JobTitle();
        $networkAdministrator->setLabel('Administrateur réseau');
        $networkAdministrator->setIsDefault(true);
        $manager->persist($networkAdministrator);
        $this->addReference(FixtureEnum::JOB_TITLE_NETWORK_ADMINISTRATOR_REFERENCE(),$networkAdministrator);

        $databaseAdministrator = new JobTitle();
        $databaseAdministrator->setLabel('Administrateur de base de données');
        $databaseAdministrator->setIsDefault(true);
        $manager->persist($databaseAdministrator);
        $this->addReference(FixtureEnum::JOB_TITLE_DATABASE_ADMINISTRATOR_REFERENCE(),$databaseAdministrator);

        $multimediaAnimator = new JobTitle();
        $multimediaAnimator->setLabel('Animateur multimédia');
        $multimediaAnimator->setIsDefault(true);
        $manager->persist($multimediaAnimator);
        $this->addReference(FixtureEnum::JOB_TITLE_MULTIMEDIA_ANIMATOR_REFERENCE(),$multimediaAnimator);

        $bigDataArchitect = new JobTitle();
        $bigDataArchitect->setLabel('Architecte Big Data');
        $bigDataArchitect->setIsDefault(true);
        $manager->persist($bigDataArchitect);
        $this->addReference(FixtureEnum::JOB_TITLE_BIG_DATA_ARCHITECT_REFERENCE(),$bigDataArchitect);

        $projetManager = new JobTitle();
        $projetManager->setLabel('Chef/fe de projet web');
        $projetManager->setIsDefault(true);
        $manager->persist($projetManager);
        $this->addReference(FixtureEnum::JOB_TITLE_PROJECT_MANAGER_REFERENCE(),$projetManager);

        $communityManager = new JobTitle();
        $communityManager->setLabel('Community manager');
        $communityManager->setIsDefault(true);
        $manager->persist($communityManager);
        $this->addReference(FixtureEnum::JOB_TITLE_COMMUNITY_MANAGER_REFERENCE(),$communityManager);

        $cyberSecurityConsultant = new JobTitle();
        $cyberSecurityConsultant->setLabel('Consultant Cyber Sécurité');
        $cyberSecurityConsultant->setIsDefault(true);
        $manager->persist($cyberSecurityConsultant);
        $this->addReference(FixtureEnum::JOB_TITLE_CYBER_SECURITY_CONSULTANT_REFERENCE(),$cyberSecurityConsultant);

        $seoConsultant = new JobTitle();
        $seoConsultant->setLabel('Consultant SEO');
        $seoConsultant->setIsDefault(true);
        $manager->persist($seoConsultant);
        $this->addReference(FixtureEnum::JOB_TITLE_SEO_CONSULTANT_REFERENCE(),$seoConsultant);

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['dev', 'prod'];
    }
}
