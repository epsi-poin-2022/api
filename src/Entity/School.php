<?php

declare(strict_types = 1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SchoolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SchoolRepository::class)]
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
    denormalizationContext: ['groups' => ['school:write']],
    normalizationContext: ['groups' => ['school:read']],
)]
class School
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups('school:read')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    #[ApiProperty(iri: 'http://schema.org/legalName')]
    #[Groups(['school:read', 'skill:read'])]
    private string $name;

    #[ORM\Column(type: 'string', length: 2083)]
    #[Assert\NotBlank]
    #[ApiProperty(iri: 'http://schema.org/url')]
    #[Groups(['school:read', 'skill:read'])]
    private string $website;

    #[ORM\OneToOne(targetEntity: Picture::class, cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(nullable: true)]
    #[ApiProperty(iri: 'http://schema.org/logo')]
    #[Groups(['school:read', 'skill:read'])]
    private ?Picture $logo = null;

    #[ORM\ManyToMany(targetEntity: JobDescription::class, mappedBy: 'schools')]
    #[Groups(['school:read'])]
    private ?Collection $jobDescriptions;

    #[Pure]
    public function __construct()
    {
        $this->jobDescriptions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getLogo(): ?Picture
    {
        return $this->logo;
    }

    public function setLogo(?Picture $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @return Collection<int, JobDescription>
     */
    public function getJobDescriptions(): Collection
    {
        return $this->jobDescriptions;
    }

    public function addJobDescription(JobDescription $jobDescription): self
    {
        if (!$this->jobDescriptions->contains($jobDescription)) {
            $this->jobDescriptions[] = $jobDescription;
            $jobDescription->addSchool($this);
        }

        return $this;
    }

    public function removeJobDescription(JobDescription $jobDescription): self
    {
        if ($this->jobDescriptions->removeElement($jobDescription)) {
            $jobDescription->removeSchool($this);
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
