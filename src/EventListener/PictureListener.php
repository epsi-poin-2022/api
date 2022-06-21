<?php

namespace App\EventListener;

use App\Entity\Picture;
use App\Service\FileUploader;
use Doctrine\ORM\Event\LifecycleEventArgs;

class PictureListener
{
    public function __construct(private FileUploader $fileUploader) {}

    public function postPersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Picture) {
            return;
        }

        $entityManager = $args->getEntityManager();
        $entity->setFilePath($this->fileUploader->getUrl($entity->getFile()));
        $entityManager->flush($entity);
    }

    public function preRemove(LifecycleEventArgs $args): void
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Picture) {
            return;
        }

        unlink($this->fileUploader->getUploadsPath().'/'.$entity->getFile());
    }
}
