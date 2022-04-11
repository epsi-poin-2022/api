<?php

declare(strict_types = 1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SkillRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
#[ApiResource(
    denormalizationContext: ['groups' => ['skill:write']],
    normalizationContext: ['groups' => ['skill:read']],
)]
class Skill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups('skill:read')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    #[Groups(['skill:read'])]
    private string $name;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    #[Groups(['skill:read'])]
    private string $question;

    #[ORM\ManyToMany(targetEntity: JobDescription::class, mappedBy: 'skills')]
    #[Groups(['skill:read'])]
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

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

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
            $jobDescription->addSkill($this);
        }

        return $this;
    }

    public function removeJobDescription(JobDescription $jobDescription): self
    {
        if ($this->jobDescriptions->removeElement($jobDescription)) {
            $jobDescription->removeSkill($this);
        }

        return $this;
    }
}
