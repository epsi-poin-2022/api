<?php

namespace App\Controller\Admin;

use App\Entity\JobDescription;
use App\Entity\JobTitle;
use App\Entity\Picture;
use App\Entity\Ressource;
use App\Entity\School;
use App\Entity\Skill;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/app/admin', name: 'admin')]
    public function index(): Response
    {
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);

         return $this->redirect($adminUrlGenerator->setController(JobDescriptionCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Digital-Job-Api');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Job Description', 'fa-solid fa-briefcase', JobDescription::class);
        yield MenuItem::linkToCrud('Job Title', 'fa-solid fa-t', JobTitle::class);
        yield MenuItem::linkToCrud('Picture', 'fa-solid fa-image', Picture::class);
        yield MenuItem::linkToCrud('Ressource', 'fa-solid fa-link', Ressource::class);
        yield MenuItem::linkToCrud('School', 'fa-solid fa-school', School::class);
        yield MenuItem::linkToCrud('Skill', 'fa-solid fa-brain', Skill::class);
    }
}
