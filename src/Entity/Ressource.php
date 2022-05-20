<?php

declare(strict_types = 1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RessourceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RessourceRepository::class)]
#[ApiResource(
    collectionOperations: [
        "get",
        "post" => [
            "security" => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['cookieAuth' => []]],
            ],
        ],
    ],
    itemOperations: [
        "get",
        "put" => [
            "security" => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['cookieAuth' => []]],
            ],
        ],
        "delete" => [
            "security" => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['cookieAuth' => []]],
            ],
        ],
        "patch" => [
            "security" => "is_granted('ROLE_ADMIN')",
            'openapi_context' => [
                'security' => [['cookieAuth' => []]],
            ],
        ],
    ],
    denormalizationContext: ['groups' => ['ressource:write']],
    normalizationContext: ['groups' => ['ressource:read']],
)]
class Ressource
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups('ressource:read')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    #[Groups(['ressource:read', 'skill:read'])]
    private string $label;

    #[ORM\Column(type: 'string', length: 2083)]
    #[Assert\NotBlank]
    #[Groups(['ressource:read', 'skill:read'])]
    private string $link;

    #[ORM\ManyToOne(targetEntity: JobDescription::class, inversedBy: 'ressources')]
    #[ORM\JoinColumn(nullable: true)]
    #[Groups(['ressource:read'])]
    private ?JobDescription $jobDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getJobDescription(): ?JobDescription
    {
        return $this->jobDescription;
    }

    public function setJobDescription(?JobDescription $jobDescription): self
    {
        $this->jobDescription = $jobDescription;

        return $this;
    }

    public function __toString(): string
    {
        return $this->label;
    }
}
