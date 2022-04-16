<?php

declare(strict_types = 1);

namespace App\Enum;

use ArchTech\Enums\InvokableCases;

enum FixtureEnum: string
{
    use InvokableCases;

    case SKILL_AUTONOMY_REFERENCE = 'skill-autonomy';
    case SKILL_WATCH_REFERENCE = 'skill-watch';
    case SKILL_RIGOROUS_REFERENCE = 'skill-rigorous';
    case SKILL_SOCIAL_REFERENCE = 'skill-social';
    case SKILL_LOGIC_REFERENCE = 'skill-logic';
    case SKILL_ENGLISH_REFERENCE = 'skill-english';
    case SKILL_DRAWING_REFERENCE = 'skill-drawing';
    case SKILL_DESIGN_REFERENCE = 'skill-design';
    case SKILL_PEDAGOGY_REFERENCE = 'skill-pedagogy';
    case SKILL_MARKETING_REFERENCE = 'skill-marketing';

    case SCHOOL_EPSI_REFERENCE = 'school-epsi';
    case SCHOOL_WIS_REFERENCE = 'school-wis';
    case SCHOOL_MYDIGITALSCHOOL_REFERENCE = 'school-mds';
    case SCHOOL_DIGITALCAMPUS_REFERENCE = 'school-digitalcampus';
    case SCHOOL_ENI_REFERENCE = 'school-eni';
    case SCHOOL_MJM_REFERENCE = 'school-mjm';
    case SCHOOL_ECOLE301_REFERENCE = 'school-ecole301';
    case SCHOOL_EPITECH_REFERENCE = 'school-epitech';
    case SCHOOL_SUPDEVINCI_REFERENCE = 'school-supdevinci';

    case PICTURE_EPSI_REFERENCE = 'picture-epsi';
    case PICTURE_WIS_REFERENCE = 'picture-wis';
    case PICTURE_MYDIGITALSCHOOL_REFERENCE = 'picture-mds';
    case PICTURE_DIGITALCAMPUS_REFERENCE = 'picture-digitalcampus';
    case PICTURE_ENI_REFERENCE = 'picture-eni';
    case PICTURE_MJM_REFERENCE = 'picture-mjm';
    case PICTURE_ECOLE301_REFERENCE = 'picture-ecole301';
    case PICTURE_EPITECH_REFERENCE = 'picture-epitech';
    case PICTURE_SUPDEVINCI_REFERENCE = 'picture-supdevinci';

    case PICTURE_DEVELOPPER_REFERENCE = 'picture-developper';
    case PICTURE_DESIGNER_REFERENCE = 'picture-designer';
    case PICTURE_NETWORK_ADMINISTRATOR_REFERENCE = 'picture-network-administrator';
    case PICTURE_DATABASE_ADMINISTRATOR_REFERENCE = 'picture-database-administrator';
    case PICTURE_MULTIMEDIA_ANIMATOR_REFERENCE = 'picture-multimedia-animator';
    case PICTURE_BIG_DATA_ARCHITECT_REFERENCE = 'picture-big-data-architect';
    case PICTURE_PROJECT_MANAGER_REFERENCE = 'picture-project-manager';
    case PICTURE_COMMUNITY_MANAGER_REFERENCE = 'picture-community-manager';
    case PICTURE_CYBER_SECURITY_CONSULTANT_REFERENCE = 'picture-cyber-security-consultant';
    case PICTURE_SEO_CONSULTANT_REFERENCE = 'picture-seo-consultant';

    case JOB_TITLE_DEVELOPPER_REFERENCE = 'job-title-developper';
    case JOB_TITLE_DEVELOPPER_BACK_END_REFERENCE = 'job-title-developper-back-end';
    case JOB_TITLE_DEVELOPPER_FRONT_END_REFERENCE = 'job-title-developper-front-end';
    case JOB_TITLE_DEVELOPPER_FULL_STACK_REFERENCE = 'job-title-developper-full-stack';
    case JOB_TITLE_CDA_REFERENCE = 'job-title-cda';
    case JOB_TITLE_DEVELOPPER_WEB_REFERENCE = 'job-title-developper-web';
    case JOB_TITLE_DESIGNER_REFERENCE = 'job-title-designer';
    case JOB_TITLE_DESIGNER_UX_REFERENCE = 'job-title-designer-ux';
    case JOB_TITLE_DESIGNER_UI_REFERENCE = 'job-title-designer-ui';
    case JOB_TITLE_NETWORK_ADMINISTRATOR_REFERENCE = 'job-title-network-administrator';
    case JOB_TITLE_DATABASE_ADMINISTRATOR_REFERENCE = 'job-title-database-administrator';
    case JOB_TITLE_MULTIMEDIA_ANIMATOR_REFERENCE = 'job-title-multimedia-animator';
    case JOB_TITLE_BIG_DATA_ARCHITECT_REFERENCE = 'job-title-big-data-architect';
    case JOB_TITLE_PROJECT_MANAGER_REFERENCE = 'job-title-project-manager';
    case JOB_TITLE_COMMUNITY_MANAGER_REFERENCE = 'job-title-community-manager';
    case JOB_TITLE_CYBER_SECURITY_CONSULTANT_REFERENCE = 'job-title-cyber-security-consultant';
    case JOB_TITLE_SEO_CONSULTANT_REFERENCE = 'job-title-seo-consultant';

    case RESSOURCE_DEVELOPPER_REFERENCE = 'ressource-developper';
    case RESSOURCE_DESIGNER_REFERENCE_MICODE = 'ressource-designer-micode';
    case RESSOURCE_DESIGNER_REFERENCE_CIDJ = 'ressource-designer-cidj';
    case RESSOURCE_DESIGNER_REFERENCE_WTTJ = 'ressource-designer-wttj';
    case RESSOURCE_NETWORK_ADMINISTRATOR_REFERENCE = 'ressource-network-administrator';
    case RESSOURCE_DATABASE_ADMINISTRATOR_REFERENCE = 'ressource-database-administrator';
    case RESSOURCE_MULTIMEDIA_ANIMATOR_REFERENCE = 'ressource-multimedia-animator';
}