<?php

namespace App\Controller\Admin;

use App\Entity\JobDescription;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class JobDescriptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return JobDescription::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('shortDescription'),
            TextEditorField::new('jobPurpose')->hideOnIndex(),
            TextEditorField::new('jobDutiesResponsibilities')->hideOnIndex(),
            TextEditorField::new('requiredQualifications')->hideOnIndex(),
            TextEditorField::new('education')->hideOnIndex(),
            TextEditorField::new('experience')->hideOnIndex(),
            TextEditorField::new('knowledge')->hideOnIndex(),
            TextEditorField::new('workingConditions')->hideOnIndex(),
            TextEditorField::new('recruitment')->hideOnIndex(),
            TextField::new('jobSalary')->hideOnIndex(),
            TextField::new('comment')->hideOnIndex(),
            AssociationField::new('picture')->hideOnIndex(),
            AssociationField::new('schools')->hideOnIndex(),
            AssociationField::new('skills')->hideOnIndex(),
            AssociationField::new('jobTitles')->hideOnIndex(),
            AssociationField::new('ressources')->hideOnIndex(),
            DateTimeField::new('createdAt')->hideOnForm(),
            DateTimeField::new('updatedAt')->hideOnForm(),
        ];
    }
}
