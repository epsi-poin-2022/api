<?php

declare(strict_types = 1);

namespace App\DataFixtures;

use App\Entity\JobDescription;
use App\Enum\FixtureEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class JobDescriptionFixtures extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
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
        $developer->setJobDutiesResponsibilities('Acteur du développement front-end (création d’interfaces claires et ergonomiques, intégration des différentes pages), ou back-end (développement dynamique et programmation des fonctionnalités attendues), il valide sa production après une phase de test');
        $developer->setJobPurpose('Le Développeur intégrateur web participe à des projets de création ou de refonte de sites Web/d’applications dans le respect d’un cahier des charges. Son développement intègre la dimension du référencement naturel et celle de la diversité des supports de navigation');
        $developer->setJobSalary('La rémunération brute annuelle moyenne d’un développeur intégrateur débutant se situe entre 28 000 et 32 000 euros annuel');
        $developer->setRecruitment('Le développeur web doit être polyvalent, autonome, respectueux des délais et capable d’intégrer de nouveaux concepts et langages de programmation dans un univers qui évolue très rapidement.');
        $developer->setShortDescription('Le Développeur intégrateur web participe à des projets de création ou de refonte de sites Web/d’applications dans le respect d’un cahier des charges.');
        $developer->setWorkingConditions('En fonction des attendus de l’entreprise, la situation peut varier. Mais le télétravail est de plus en plus démocratisé. Il est également fréquent de devoir réaliser l’intégralité des implémentations en autonomie.');
        $developer->setPicture($this->getReference(FixtureEnum::PICTURE_DEVELOPPER_REFERENCE()));
        $developer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DEVELOPPER_BACK_END_REFERENCE()));
        $developer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DEVELOPPER_FRONT_END_REFERENCE()));
        $developer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DEVELOPPER_FULL_STACK_REFERENCE()));
        $developer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DEVELOPPER_REFERENCE()));
        $developer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DEVELOPPER_WEB_REFERENCE()));
        $developer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_CDA_REFERENCE()));
        $developer->addRessource($this->getReference(FixtureEnum::RESSOURCE_DEVELOPPER_REFERENCE()));
        $developer->addSchool($this->getReference(FixtureEnum::SCHOOL_EPSI_REFERENCE()));
        $developer->addSchool($this->getReference(FixtureEnum::SCHOOL_EPITECH_REFERENCE()));
        $developer->addSchool($this->getReference(FixtureEnum::SCHOOL_SUPDEVINCI_REFERENCE()));
        $developer->addSchool($this->getReference(FixtureEnum::SCHOOL_MYDIGITALSCHOOL_REFERENCE()));
        $developer->addSkill($this->getReference(FixtureEnum::SKILL_AUTONOMY_REFERENCE()));
        $developer->addSkill($this->getReference(FixtureEnum::SKILL_WATCH_REFERENCE()));
        $developer->addSkill($this->getReference(FixtureEnum::SKILL_RIGOROUS_REFERENCE()));
        $manager->persist($developer);

        $networkAdministrator = new JobDescription();
        $networkAdministrator->setShortDescription('Le travail de l’administrateur réseaux consiste à faciliter la circulation de l’information au sein d’une entreprise, à travers une bonne gestion des équipements informatiques.');
        $networkAdministrator->setJobPurpose('Le travail de l’administrateur réseaux consiste à faciliter la circulation de l’information au sein d’une entreprise, à travers une bonne gestion des équipements informatiques.');
        $networkAdministrator->setJobDutiesResponsibilities('Ses missions sont nombreuses et variées, citons par exemple :Évaluation des besoins des salariés en matière de matériel informatique; Réception, installation et paramétrage du matériel commandé ;Mise en place et analyse des performances du réseau informatique ;Détection et correction des failles informatiques ;Sécurisation du réseau informatique ;Rénovation et extension du réseau ;Accompagnement et formation du personnel à l’utilisation du réseau et du matériel informatique ;Réalisation de veille technologique pour optimiser le réseau ;Gestion du budget d’exploitation du système informatique ;Maintenance réseau…');
        $networkAdministrator->setRecruitment('Face à la digitalisation accrue des entreprises et les nombreuses menaces liées à la cybercriminalité, le besoin de disposer de réseaux fiables et fonctionnels est plus que jamais d’actualité.');
        $networkAdministrator->setJobSalary('À partir de 2000€ pour un administrateur réseau débutant');
        $networkAdministrator->setPicture($this->getReference(FixtureEnum::PICTURE_NETWORK_ADMINISTRATOR_REFERENCE()));
        $networkAdministrator->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_NETWORK_ADMINISTRATOR_REFERENCE()));
        $networkAdministrator->addSkill($this->getReference(FixtureEnum::SKILL_AUTONOMY_REFERENCE()));
        $networkAdministrator->addSkill($this->getReference(FixtureEnum::SKILL_WATCH_REFERENCE()));
        $networkAdministrator->addSkill($this->getReference(FixtureEnum::SKILL_RIGOROUS_REFERENCE()));
        $networkAdministrator->addRessource($this->getReference(FixtureEnum::RESSOURCE_NETWORK_ADMINISTRATOR_REFERENCE()));
        $manager->persist($networkAdministrator);

        $databaseAdministrator = new JobDescription();
        $databaseAdministrator->setShortDescription('L’administrateur de base de données (BDD) est le gestionnaire d’un volume important d’informations : adresses clients, tarifs, statistiques, documents. L’administrateur met ces données (Datas) à la disposition des collaborateurs concernés');
        $databaseAdministrator->setJobPurpose('Le rôle de l’administrateur de bases de données est d’organiser et de gérer en toute fiabilité les systèmes de gestion des données de l’entreprise. Il doit en assurer la cohérence, la qualité et la sécurité. Il peut avoir à gérer plusieurs bases de données.');
        $databaseAdministrator->setRequiredQualifications('Quatre années d’études supérieures en moyenne et une expérience de 5 ans dans le développement informatique sont souhaitables pour devenir administrateur de bases de données.');
        $databaseAdministrator->setExperience('Avec plusieurs années d’expérience, l’administrateur de bases de données peut évoluer vers un poste de chef de projet ou de responsable informatique encadrant toute une équipe d’informaticiens.');
        $databaseAdministrator->setWorkingConditions('En fonction des attendus de l’entreprise, la situation peut varier. Mais le télétravail est de plus en plus démocratisé.');
        $databaseAdministrator->setJobSalary('Le salaire d’un débutant se situe entre 2 300 et 3 000 € brut par mois');
        $databaseAdministrator->setPicture($this->getReference(FixtureEnum::PICTURE_DATABASE_ADMINISTRATOR_REFERENCE()));
        $databaseAdministrator->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DATABASE_ADMINISTRATOR_REFERENCE()));
        $databaseAdministrator->addSkill($this->getReference(FixtureEnum::SKILL_RIGOROUS_REFERENCE()));
        $databaseAdministrator->addSkill($this->getReference(FixtureEnum::SKILL_LOGIC_REFERENCE()));
        $databaseAdministrator->addRessource($this->getReference(FixtureEnum::RESSOURCE_DATABASE_ADMINISTRATOR_REFERENCE()));
        $manager->persist($databaseAdministrator);

        $multimediaAnimator = new JobDescription();
        $multimediaAnimator->setShortDescription('L’animateur ou l’animatrice multimédia est un(e) pédagogue des technologies de l’information et de la communication (TIC). Il ou elle initie toute une série de publics aux outils informatiques, aux usages de l’internet et du multimédia.');
        $multimediaAnimator->setJobPurpose('Il procède à ses activités d’enseignement, d’accompagnement individuel ou collectif en organisant des ateliers. Il conseille, explique, démontre par l’exemple et propose divers exercices d’application.');
        $multimediaAnimator->setJobDutiesResponsibilities('L’animateur ou l’animatrice multimédia a pour mission de faire découvrir et partager les connaissances et les pratiques numériques pour faciliter l’accès de tous aux services et aux innovations de l’internet. ');
        $multimediaAnimator->setRequiredQualifications('Être animateur multimédia nécessite une bonne culture de l’internet (technologies, règles de droit, de sécurité et de civilité) ainsi que la connaissance des principaux services de l’administration en ligne. Il faut être également en mesure d’animer un groupe et bien entendu avoir des qualités relationnelles et pédagogiques évidentes. ');
        $multimediaAnimator->setWorkingConditions('Ses horaires peuvent être décalés et sont fonction de la nature des publics auxquels il s’adresse.');
        $multimediaAnimator->setJobSalary('Entre le S.M.I.C et 1600 € brut mensuels');
        $multimediaAnimator->setPicture($this->getReference(FixtureEnum::PICTURE_MULTIMEDIA_ANIMATOR_REFERENCE()));
        $multimediaAnimator->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_MULTIMEDIA_ANIMATOR_REFERENCE()));
        $multimediaAnimator->addSkill($this->getReference(FixtureEnum::SKILL_SOCIAL_REFERENCE()));
        $multimediaAnimator->addSkill($this->getReference(FixtureEnum::SKILL_WATCH_REFERENCE()));
        $multimediaAnimator->addSkill($this->getReference(FixtureEnum::SKILL_PEDAGOGY_REFERENCE()));
        $multimediaAnimator->addRessource($this->getReference(FixtureEnum::RESSOURCE_MULTIMEDIA_ANIMATOR_REFERENCE()));
        $manager->persist($multimediaAnimator);

        $bigDataArchitect = new JobDescription();
        $bigDataArchitect->setShortDescription('L’architecte big data fait des partie des profils les plus recherchés du big data. Son rôle est d’organiser la récupération, la gestion et le stockage des données brutes.');
        $bigDataArchitect->setJobPurpose('L’architecte big data est chargé de la collecte de la donnée brute qui peut-être plus ou moins structurée, en plus ou moins grande quantité et qui peut provenir de sources différentes (internes, externes). Après cet inventaire, il crée et optimise les infrastructures de stockage, de manipulation et de restitution des données brutes.');
        $bigDataArchitect->setKnowledge('L’architecte big data maîtrise les principales technologies de big data en terme de bases de données NoSQL (MongoDB, Cassandra ou Redis), d’infrastructures serveurs (Hadoop, Spark) et de stockage de données en mémoire (Memtables).');
        $bigDataArchitect->setJobSalary('L’architecte big data junior commence avec un salaire aux alentours de 3 000 €');
        $bigDataArchitect->setPicture($this->getReference(FixtureEnum::PICTURE_BIG_DATA_ARCHITECT_REFERENCE()));
        $bigDataArchitect->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_BIG_DATA_ARCHITECT_REFERENCE()));
        $bigDataArchitect->addSkill($this->getReference(FixtureEnum::SKILL_LOGIC_REFERENCE()));
        $bigDataArchitect->addSkill($this->getReference(FixtureEnum::SKILL_RIGOROUS_REFERENCE()));
        $manager->persist($bigDataArchitect);

        $projetManager = new JobDescription();
        $projetManager->setShortDescription('Selon l’environnement de travail et la mission, le métier de chef de projet web se décline en chef de projet SEO-SEM (search engine optimization/search engine marketing), chef de projet e-commerce, chef de projet éditorial, chef de projet intranet…Dans tous les cas, le chef de projet web est avant tout un chef d’orchestre à la fois fort en technique internet et passionné de marketing');
        $projetManager->setJobPurpose('Selon les entreprises, les responsabilités du chef de projet web peuvent varier, mais dans tous les cas il commence par recueillir les besoins (prise de brief), évalue la faisabilité technique du projet et sa pertinence en fonction de l’environnement économique et de la stratégie de l’entreprise. Sans oublier la prise en compte des tendances du web. Il dresse le cahier des charges, établit la ligne éditoriale et le plan de production du site, élabore le planning et le budget. Ensuite, pendant la phase de développement, il coordonne et encadre les équipes techniques (graphistes, réalisateurs, développeurs, rédacteurs…) et les prestataires extérieurs (hébergeurs et fournisseurs). Il veille au bon déroulement de toutes les étapes de la production. Il a la maîtrise des délais et des coûts.');
        $projetManager->setJobSalary('À partir de 2200€ brut pour un chef de projet débutant');
        $projetManager->setPicture($this->getReference(FixtureEnum::PICTURE_PROJECT_MANAGER_REFERENCE()));
        $projetManager->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_PROJECT_MANAGER_REFERENCE()));
        $projetManager->addSkill($this->getReference(FixtureEnum::SKILL_SOCIAL_REFERENCE()));
        $manager->persist($projetManager);

        $communityManager = new JobDescription();
        $communityManager->setShortDescription('Sa spécialité : positionner au mieux un site web sur les moteurs de recherche.');
        $communityManager->setJobPurpose('Le consultant SEO est un professionnel de l’e-marketing. Sa spécialité : positionner au mieux un site web sur les moteurs de recherche. L’audience d’un site web dépend en effet de la qualité de son référencement ; en tête de liste quand l’internaute tape ses mots-clés. Il met en œuvre un suivi de l’évolution du site car les mots-clés évoluent avec la mode et l’actualité. Le consultant en réferencement peut travailler en référencement naturel (SEO - Search Engine Optimization) dans les moteurs de recherche, en achat de mots-clés (SEM-Search Engine Marketing) et/ou sur les réseaux sociaux (SMO - Social Media Optimization). Le consultant SEO peut exercer dans une agence web, en tant qu’indépendant ou directement chez le client. Le référenceur web a des compétences en informatique, marketing, commerce et communication. Ce poste est souvent occupé par d’anciens webmasters.');
        $communityManager->setJobDutiesResponsibilities('Audit du site, analyse des facteurs bloquants, identification des cibles du site et des concurrents, sélection d’une liste de mots-clés, création de pages spéciales… Sa mission se termine avec une évaluation du retour sur investissement.');
        $communityManager->setJobSalary('2 000 € brut par mois en moyenne pour un community manager débutant.');
        $communityManager->setPicture($this->getReference(FixtureEnum::PICTURE_COMMUNITY_MANAGER_REFERENCE()));
        $communityManager->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_COMMUNITY_MANAGER_REFERENCE()));
        $communityManager->addSkill($this->getReference(FixtureEnum::SKILL_MARKETING_REFERENCE()));
        $communityManager->addSchool($this->getReference(FixtureEnum::SCHOOL_WIS_REFERENCE()));
        $communityManager->addSchool($this->getReference(FixtureEnum::SCHOOL_ECOLE301_REFERENCE()));
        $manager->persist($communityManager);

        $cyberSecurityConsultant = new JobDescription();
        $cyberSecurityConsultant->setShortDescription('Le/la consultant/consultante en cybersécurité conseille et accompagne le client sur sa problématique de sécurisation des systèmes d’information.');
        $cyberSecurityConsultant->setJobPurpose('Les activités des consultants cybersécurité peuvent être des activités nécessitant des compétences techniques pointues, mais également des activités davantage tournées vers l’organisation des projets de sécurité informatique comme la gouvernance, la mise en conformité ou la gestion de projet. L’activité des consultants dépend également du marché et des besoins des clients qui peuvent fluctuer selon l’actualité règlementaire ou technique. Les consultants cybersécurité travaillent main dans la main avec les services de sécurité des systèmes d’information de leur client et être amené à travailler sur des sujets diversifiés touchant toutes les fonctions de l’entreprise (achats, RH…), et ceux, dans le but de sécuriser les systèmes d’information. Une compréhension rapide des enjeux des entreprises et des métiers est donc primordiale aux consultants cybersécurité.');
        $cyberSecurityConsultant->setWorkingConditions('Tous les secteurs sont concernés par la sécurité informatique, notamment les banques et les secteurs industriels, qui font largement appel aux consultants cybersécurité. Les petites entreprises étant moins matures sur le sujet, les entreprises clientes sont plus souvent les grands groupes et grandes entreprises.');
        $cyberSecurityConsultant->setJobSalary('À partir de 3000 € pour un débutant');
        $cyberSecurityConsultant->setPicture($this->getReference(FixtureEnum::PICTURE_CYBER_SECURITY_CONSULTANT_REFERENCE()));
        $cyberSecurityConsultant->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_CYBER_SECURITY_CONSULTANT_REFERENCE()));
        $manager->persist($cyberSecurityConsultant);

        $seoConsultant = new JobDescription();
        $seoConsultant->setShortDescription('Le consultant SEO, également appelé consultant en référencement naturel, référenceur web ou encore SEO Manager, a pour mission d’optimiser le contenu des supports web de ses clients (sites, blogs, applications…), afin de les faire gagner en trafic, en visibilité et en notoriété sur les moteurs de recherche.');
        $seoConsultant->setJobPurpose('Le consultant SEO, également appelé consultant en référencement naturel, référenceur web ou encore SEO Manager, a pour mission d’optimiser le contenu des supports web de ses clients (sites, blogs, applications…), afin de les faire gagner en trafic, en visibilité et en notoriété sur les moteurs de recherche. Il veille à ce que la personne physique ou morale (entreprise traditionnelle ou pure player) pour laquelle il travaille apparaisse aussi haut que possible lorsque certaines requêtes sont lancées sur les moteurs de recherche. Le ou la consultante SEO commence par réaliser un audit visant à estimer la visibilité actuelle du site en question et repérer les manques et les besoins. Puis il identifie les différents mots-clés qui définissent le mieux l’activité de son client, et transmet ces données aux équipes en charge du projet d’optimisation du référencement. L’expert SEO met ensuite en place la stratégie de référencement, qui peut toucher au site en lui-même (on-site) et intégrer un travail relationnel avec d’autres sites (off-site), via la mise en place d’une stratégie de netlinking (liens externes, citations…). Enfin, il établit un suivi de celle-ci : performances, positionnement, chiffre d’affaires, retour sur investissement. Pour rester à la pointe, le consultant SEO doit mener une veille technologique, afin de se tenir à jour des évolutions du fonctionnement des moteurs de recherche. Il effectue également une veille concurrentielle, en particulier sur les mots-clés ciblés par les concurrents de son client ou de son entreprise.');
        $seoConsultant->setJobSalary('Débutant, il démarre sa carrière avec un salaire  mensuel de 1 800 € environ. Et peut aller jusqu’à 3 000 € pour un confirmé.');
        $seoConsultant->setPicture($this->getReference(FixtureEnum::PICTURE_SEO_CONSULTANT_REFERENCE()));
        $seoConsultant->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_SEO_CONSULTANT_REFERENCE()));
        $seoConsultant->addSkill($this->getReference(FixtureEnum::SKILL_MARKETING_REFERENCE()));
        $seoConsultant->addSkill($this->getReference(FixtureEnum::SKILL_ENGLISH_REFERENCE()));
        $seoConsultant->addSkill($this->getReference(FixtureEnum::SKILL_RIGOROUS_REFERENCE()));
        $manager->persist($seoConsultant);

        $designer = new JobDescription();
        $designer->setJobPurpose('Le travail de UX/UI designer consiste à simplifier les systèmes informatiques (application, site Internet, logiciel) pour les utilisateurs. Alors que l’UX est plutôt lié à l’expérience utilisateur, l’UI fait référence au design de tous les composants qui existent dans une interface. Il est en relation directe avec la stratégie de l’entreprise, le produit étant le point de contact entre le client et la boîte, et de plus en plus, le relais d’innovation de la boîte. Côté expérience utilisateur, il est donc sans cesse à l’écoute du « user » et multiplie les études clients afin de comprendre son profil, son parcours, ses problèmes, ses motivations. Il s’en sert pour tester les hypothèses de l’équipe produit, afin de les valider ou des les invalider. « Si il y a beaucoup d’utilisateurs c’est un travail de quantité et ça demande une exigence technique, c’est-à-dire de bons outils pour faire des analytics sur la façon d’utiliser le logiciel.» Sur la partie UI, son rôle est de créer le design de toutes les interfaces qui sont dans le logiciel.');
        $designer->setKnowledge('Savoir communiquer : c’est un vrai travail d’équipe dans lequel on doit intégrer les contraintes de tous et trouver une solution ensemble. Avoir de l’empathie : travailler conjointement avec les utilisateurs nécessite de les écouter et de pouvoir analyser objectivement ce qu’ils disent sans l’interpréter à notre sauce. Être pragmatique : pour s’adapter au temps et au budget du client, et savoir se remettre en question ! Enfin, pour la partie plus technique du métier, il faut avoir une bonne connaissance du web, des bonnes pratiques, de l’ergonomie, du design, connaître les tendances actuelles et être capable d’avoir un regard critique dessus.');
        $designer->setShortDescription('Le rôle de l’UX/UI designer est de créer des interfaces qui répondent aux besoins utilisateurs, et leur offrent une expérience intuitive et différenciante.');
        $designer->setJobSalary('Un débutant commence à 35K€/an');
        $designer->setPicture($this->getReference(FixtureEnum::PICTURE_DESIGNER_REFERENCE()));
        $designer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DESIGNER_REFERENCE()));
        $designer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DESIGNER_UX_REFERENCE()));
        $designer->addJobTitle($this->getReference(FixtureEnum::JOB_TITLE_DESIGNER_UI_REFERENCE()));
        $designer->addRessource($this->getReference(FixtureEnum::RESSOURCE_DESIGNER_REFERENCE_MICODE()));
        $designer->addRessource($this->getReference(FixtureEnum::RESSOURCE_DESIGNER_REFERENCE_WTTJ()));
        $designer->addRessource($this->getReference(FixtureEnum::RESSOURCE_DESIGNER_REFERENCE_CIDJ()));
        $designer->addSchool($this->getReference(FixtureEnum::SCHOOL_MYDIGITALSCHOOL_REFERENCE()));
        $designer->addSkill($this->getReference(FixtureEnum::SKILL_DESIGN_REFERENCE()));
        $designer->addSkill($this->getReference(FixtureEnum::SKILL_DRAWING_REFERENCE()));
        $designer->addSkill($this->getReference(FixtureEnum::SKILL_SOCIAL_REFERENCE()));
        $designer->addSkill($this->getReference(FixtureEnum::SKILL_WATCH_REFERENCE()));
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
            PictureDevFixtures::class,
        ];
    }

    public static function getGroups(): array
    {
        return ['dev', 'prod'];
    }
}
