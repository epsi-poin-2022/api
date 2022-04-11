<?php

declare(strict_types = 1);

namespace App\DataFixtures;

use App\Entity\JobDescription;
use App\Entity\Picture;
use App\Enum\FixtureEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class JobDescriptionFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager): void
    {
        $developer = new JobDescription();
        $developer->setComment('Un développeur peut se spécialiser dans un secteur d’activité précis : jeux vidéo, e-marketing, édition en ligne, banque, assurance… Avec de l’expérience et du savoir-faire, il peut encadrer une équipe de développeurs ou devenir chef de projet technique.');
        $developer->setEducation('');
        $developer->setJobDutiesResponsibilities('Acteur du développement front-end (création d’interfaces claires et ergonomiques, intégration des différentes pages), ou back-end (développement dynamique et programmation des fonctionnalités attendues), il valide sa production après une phase de test');
        $developer->setJobPurpose('Le Développeur intégrateur web participe à des projets de création ou de refonte de sites Web/d’applications dans le respect d’un cahier des charges. Son développement intègre la dimension du référencement naturel et celle de la diversité des supports de navigation');
        $developer->setJobSalary('La rémunération brute annuelle moyenne d’un développeur intégrateur débutant se situe entre 28 000 et 32 000 euros annuel');
        $developer->setPicture($this->getReference(FixtureEnum::PICTURE_DEVELOPPER_REFERENCE));
        $developer->setRecruitment('Le développeur web doit être polyvalent, autonome, respectueux des délais et capable d’intégrer de nouveaux concepts et langages de programmation dans un univers qui évolue très rapidement.');
        $developer->setShortDescription('Le Développeur intégrateur web participe à des projets de création ou de refonte de sites Web/d’applications dans le respect d’un cahier des charges.');
        $developer->setWorkingConditions('En fonction des attendus de l’entreprise, la situation peut varier. Mais le télétravail est de plus en plus démocratisé. Il est également fréquent de devoir réaliser l’intégralité des implémentations en autonomie.');
        $developer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DEVELOPPER_BACK_END_REFERENCE));
        $developer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DEVELOPPER_FRONT_END_REFERENCE));
        $developer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DEVELOPPER_FULL_STACK_REFERENCE));
        $developer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DEVELOPPER_REFERENCE));
        $developer->addRessource($this->getReference(FixtureEnum::RESSOURCE_DEVELOPPER_REFERENCE));
        $developer->addSchool($this->getReference(FixtureEnum::SCHOOL_EPSI_REFERENCE));
        $developer->addSchool($this->getReference(FixtureEnum::SCHOOL_EPITECH_REFERENCE));
        $developer->addSchool($this->getReference(FixtureEnum::SCHOOL_SUPDEVINCI_REFERENCE));
        $developer->addSchool($this->getReference(FixtureEnum::SCHOOL_MYDIGITALSCHOOL_REFERENCE));
        $developer->addSkill($this->getReference(FixtureEnum::SKILL_AUTONOMY_REFERENCE));
        $developer->addSkill($this->getReference(FixtureEnum::SKILL_WATCH_REFERENCE));
        $developer->addSkill($this->getReference(FixtureEnum::SKILL_RIGOROUS_REFERENCE));
        $manager->persist($developer);

        $designer = new JobDescription();
        $designer->setJobPurpose('Le travail de UX/UI designer consiste à simplifier les systèmes informatiques (application, site Internet, logiciel) pour les utilisateurs. Alors que l’UX est plutôt lié à l’expérience utilisateur, l’UI fait référence au design de tous les composants qui existent dans une interface. Il est en relation directe avec la stratégie de l’entreprise, le produit étant le point de contact entre le client et la boîte, et de plus en plus, le relais d’innovation de la boîte. Côté expérience utilisateur, il est donc sans cesse à l’écoute du « user » et multiplie les études clients afin de comprendre son profil, son parcours, ses problèmes, ses motivations. Il s’en sert pour tester les hypothèses de l’équipe produit, afin de les valider ou des les invalider. « Si il y a beaucoup d’utilisateurs c’est un travail de quantité et ça demande une exigence technique, c’est-à-dire de bons outils pour faire des analytics sur la façon d’utiliser le logiciel.» Sur la partie UI, son rôle est de créer le design de toutes les interfaces qui sont dans le logiciel.');
        $designer->setKnowledge('Savoir communiquer : c’est un vrai travail d’équipe dans lequel on doit intégrer les contraintes de tous et trouver une solution ensemble. Avoir de l’empathie : travailler conjointement avec les utilisateurs nécessite de les écouter et de pouvoir analyser objectivement ce qu’ils disent sans l’interpréter à notre sauce. Être pragmatique : pour s’adapter au temps et au budget du client, et savoir se remettre en question ! Enfin, pour la partie plus technique du métier, il faut avoir une bonne connaissance du web, des bonnes pratiques, de l’ergonomie, du design, connaître les tendances actuelles et être capable d’avoir un regard critique dessus.');
        $designer->setPicture($this->getReference(FixtureEnum::PICTURE_DESIGNER_REFERENCE));
        $designer->setShortDescription('Le rôle de l’UX/UI designer est de créer des interfaces qui répondent aux besoins utilisateurs, et leur offrent une expérience intuitive et différenciante.');
        $designer->setJobSalary('Un débutant commence à 35K€/an');
        $designer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DESIGNER_REFERENCE));
        $designer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DESIGNER_UX_REFERENCE));
        $designer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DESIGNER_UI_REFERENCE));
        $designer->addRessource($this->getReference(FixtureEnum::RESSOURCE_DESIGNER_REFERENCE));
        $designer->addSchool($this->getReference(FixtureEnum::SCHOOL_MYDIGITALSCHOOL_REFERENCE));
        $designer->addSkill($this->getReference(FixtureEnum::SKILL_DESIGN_REFERENCE));
        $designer->addSkill($this->getReference(FixtureEnum::SKILL_DRAWING_REFERENCE));
        $designer->addSkill($this->getReference(FixtureEnum::SKILL_SOCIAL_REFERENCE));
        $designer->addSkill($this->getReference(FixtureEnum::SKILL_WATCH_REFERENCE));
        $manager->persist($designer);

        $manager->flush();
    }

    /**
     * @return string[]
     */
    public function getDependencies(): array
    {
        return [
            SchoolFixtures::class,
            SkillFixtures::class,
            JobTitleFixtures::class,
            RessourceFixtures::class,
            PictureFixtures::class,
        ];
    }
}
