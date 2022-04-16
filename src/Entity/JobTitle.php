<?php

declare(strict_types = 1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\JobTitleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: JobTitleRepository::class)]
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
    denormalizationContext: ['groups' => ['job_title:write']],
    normalizationContext: ['groups' => ['job_title:read']],
)]
class JobTitle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups('job_title:read')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    #[Groups(['job_title:read', 'skill:read'])]
    private string $label;

    #[ORM\Column(type: 'boolean')]
    #[Assert\NotBlank]
    #[Groups(['job_title:read', 'skill:read'])]
    private bool $isDefault;

    #[ORM\ManyToOne(targetEntity: JobDescription::class, inversedBy: 'jobTitles')]
    #[ORM\JoinColumn(nullable: true)]
    #[Groups(['job_title:read'])]
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

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;

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
}
