<?php

declare(strict_types = 1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Controller\PictureController;

#[ORM\Entity]
#[ApiResource(
    collectionOperations: [
        'get',
        'post' => [
            'controller' => PictureController::class,
            'deserialize' => false,
            'openapi_context' => [
                'requestBody' => [
                    'description' => 'File Upload',
                    'required' => true,
                    'content' => [
                        'multipart/form-data' => [
                            'schema' => [
                                'type' => 'object',
                                'properties' => [
                                    'file' => [
                                        'type' => 'string',
                                        'format' => 'binary',
                                        'description' => 'File to be uploaded',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'security' => [['cookieAuth' => []]],
            ],
            'security' => "is_granted('ROLE_ADMIN')",
        ],
    ],
    iri: 'http://schema.org/ImageObject',
    itemOperations: [
        'get',
        'delete' => [
            'security' => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['cookieAuth' => []]],
            ],
        ]
    ],
    normalizationContext: ['groups' => ['picture:read']],
)]
class Picture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups('picture: read')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank]
    #[Groups(['picture:read', 'skill:read'])]
    private string $file;

    #[ORM\Column(type: 'string', nullable: true)]
    #[ApiProperty(iri: 'http://schema.org/contentUrl')]
    #[Groups(['picture:read', 'skill:read'])]
    private ?string $filePath = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile(string $file): void
    {
        $this->file = $file;
    }

    /**
     * @return string|null
     */
    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    /**
     * @param string|null $filePath
     */
    public function setFilePath(?string $filePath): void
    {
        $this->filePath = $filePath;
    }
}
