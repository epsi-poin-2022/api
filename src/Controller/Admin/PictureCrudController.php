<?php

namespace App\Controller\Admin;

use App\Entity\Picture;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class PictureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Picture::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('file'),
            ImageField::new('file')
                ->setBasePath('/uploads/')
                ->setUploadDir('/public/uploads/')
                ->setFormType(FileUploadType::class)
                ->setUploadedFileNamePattern('[slug]-[uuid].[extension]')
                ->setRequired(true)
                ->hideOnIndex(),
        ];
    }

    public function configureActions(Actions $actions): Actions {
        return $actions
            ->remove(Crud::PAGE_INDEX, Action::EDIT);
    }
}
