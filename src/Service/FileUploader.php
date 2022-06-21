<?php

declare(strict_types = 1);

namespace App\Service;

use Exception;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\UrlHelper;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * Class FileUploader
 */
class FileUploader
{
    private string $uploadsPath;
    private SluggerInterface $slugger;
    private UrlHelper $urlHelper;
    private string $relativeUploadsDir;

    /**
     * @param string           $publicPath
     * @param string           $uploadsPath
     * @param SluggerInterface $slugger
     * @param UrlHelper        $urlHelper
     */
    public function __construct(string $publicPath, string $uploadsPath, SluggerInterface $slugger, UrlHelper $urlHelper)
    {
        $this->uploadsPath = $uploadsPath;
        $this->slugger = $slugger;
        $this->urlHelper = $urlHelper;

        // get uploads directory relative to public path //  "/uploads/"
        $this->relativeUploadsDir = str_replace($publicPath, '', $this->uploadsPath).'/';
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
     * @param bool        $absolute
     *
     * @return string|null
     */
    public function getUrl(?string $fileName, bool $absolute = true): ?string
    {
        if (empty($fileName)) {
            return null;
        }

        if ($absolute) {
            return $this->urlHelper->getAbsoluteUrl($this->relativeUploadsDir.$fileName);
        }

        return $this->urlHelper->getRelativePath($this->relativeUploadsDir.$fileName);
    }
}
