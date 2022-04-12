<?php

declare(strict_types = 1);

namespace App\DataFixtures;

use App\Entity\Ressource;
use App\Enum\FixtureEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RessourceFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager): void
    {
        $developerRessource = new Ressource();
        $developerRessource->setLabel('Micode x Pôle emploi - Les passionnés du numérique - Développeur Full Stack');
        $developerRessource->setLink('https://www.youtube.com/watch?v=RRDSl8OdVrU&list=PLqvVw037WdRWjSlcLW07QEZmJ4NvuCwP6&index=1');
        $manager->persist($developerRessource);
        $this->addReference(FixtureEnum::RESSOURCE_DEVELOPPER_REFERENCE, $developerRessource);

        $designerRessourceMicode = new Ressource();
        $designerRessourceMicode->setLabel('Micode x Pôle emploi - Les passionnés du numérique - UX/UI Designer');
        $designerRessourceMicode->setLink('https://www.youtube.com/watch?v=pMFqC3AanII&list=PLqvVw037WdRWjSlcLW07QEZmJ4NvuCwP6&index=5');
        $manager->persist($designerRessourceMicode);
        $this->addReference(FixtureEnum::RESSOURCE_DESIGNER_REFERENCE_MICODE, $designerRessourceMicode);

        $designerRessourceCidj = new Ressource();
        $designerRessourceCidj->setLabel('CIDJ');
        $designerRessourceCidj->setLink('https://www.cidj.com/metiers/designer-ux-ui');
        $manager->persist($designerRessourceCidj);
        $this->addReference(FixtureEnum::RESSOURCE_DESIGNER_REFERENCE_CIDJ, $designerRessourceCidj);

        $designerRessourceWttj = new Ressource();
        $designerRessourceWttj->setLabel('WTTJ');
        $designerRessourceWttj->setLink('https://www.welcometothejungle.com/fr/articles/ux-ui-designer');
        $manager->persist($designerRessourceWttj);
        $this->addReference(FixtureEnum::RESSOURCE_DESIGNER_REFERENCE_WTTJ, $designerRessourceWttj);

        $networkAdministrator = new Ressource();
        $networkAdministrator->setLabel('EPSI - Administrateur réseaux');
        $networkAdministrator->setLink('https://www.epsi.fr/emploi-entreprise/observatoire-des-metiers/administrateur-reseau/');
        $manager->persist($networkAdministrator);
        $this->addReference(FixtureEnum::RESSOURCE_NETWORK_ADMINISTRATOR_REFERENCE, $networkAdministrator);

        $databaseAdministrator = new Ressource();
        $databaseAdministrator->setLabel('CIDJ');
        $databaseAdministrator->setLink('https://www.cidj.com/metiers/administrateur-administratrice-base-de-donnees');
        $manager->persist($databaseAdministrator);
        $this->addReference(FixtureEnum::RESSOURCE_DATABASE_ADMINISTRATOR_REFERENCE, $databaseAdministrator);

        $multimediaAnimator = new Ressource();
        $multimediaAnimator->setLabel('CIDJ');
        $multimediaAnimator->setLink('https://www.cidj.com/metiers/animateur-animatrice-multimedia');
        $manager->persist($multimediaAnimator);
        $this->addReference(FixtureEnum::RESSOURCE_MULTIMEDIA_ANIMATOR_REFERENCE, $multimediaAnimator);

        $manager->flush();
    }
}
