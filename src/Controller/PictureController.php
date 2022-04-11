<?php

namespace App\Controller;

use App\Entity\Picture;
use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * Class PictureController
 */
#[AsController]
final class PictureController extends AbstractController
{
    /**
     * @param Request      $request
     * @param FileUploader $fileUploader
     *
     * @return Picture
     */
    public function __invoke(Request $request, FileUploader $fileUploader): Picture
    {
        $uploadedFile = $request->files->get('file');
        if (!$uploadedFile) {
            throw new BadRequestHttpException('"file" is required');
        }
        // upload the file
        $filename = $fileUploader->upload($uploadedFile);

        // create a new picture  and save its filename
        $picture = new Picture();
        $picture->setFile($filename);

        return $picture;
    }
}
