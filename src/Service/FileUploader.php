<?php

declare(strict_types = 1);

namespace App\Service;

use Exception;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * Class FileUploader
 */
class FileUploader
{
    private string $uploadsPath;
    private SluggerInterface $slugger;

    /**
     * @param string           $uploadsPath
     * @param SluggerInterface $slugger
     */
    public function __construct(string $uploadsPath, SluggerInterface $slugger)
    {
        $this->uploadsPath = $uploadsPath;
        $this->slugger = $slugger;
    }

    /**
     * @param UploadedFile $file
     *
     * @return string
     * @throws Exception
     */
    public function upload(UploadedFile $file): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            $file->move($this->getUploadsPath(), $fileName);
        } catch (FileException $e) {
            $errorMessage = "Le fichier (${originalFilename}) n’a pas pu être téléversé";
            throw new Exception($errorMessage);
        }

        return $fileName;
    }

    /**
     * @return string
     */
    public function getUploadsPath(): string
    {
        return $this->uploadsPath;
    }

    /**
     * @param string|null $fileName
     *
     * @return string|null
     */
    public function getUrl(?string $fileName): ?string
    {
        if (empty($fileName)) {
            return null;
        }

        return $_ENV['UPLOADS_URL'].$fileName;
    }
}
