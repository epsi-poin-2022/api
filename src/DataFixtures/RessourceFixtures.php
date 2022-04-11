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

        $designerRessource = new Ressource();
        $designerRessource->setLabel('Micode x Pôle emploi - Les passionnés du numérique - UX/UI Designer');
        $designerRessource->setLink('https://www.youtube.com/watch?v=pMFqC3AanII&list=PLqvVw037WdRWjSlcLW07QEZmJ4NvuCwP6&index=5');
        $manager->persist($designerRessource);
        $this->addReference(FixtureEnum::RESSOURCE_DESIGNER_REFERENCE, $designerRessource);

        $manager->flush();
    }
}
