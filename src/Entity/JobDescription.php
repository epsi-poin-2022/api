<?php

declare(strict_types = 1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\JobDescriptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: JobDescriptionRepository::class)]
#[ORM\HasLifecycleCallbacks()]
#[ApiResource(
    denormalizationContext: ['groups' => ['job_description:write']],
    normalizationContext: ['groups' => ['job_description:read']],
)]
class JobDescription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups('job_description:read')]
    private ?int $id = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank]
    #[Groups(['job_description:read', 'skill:read'])]
    private string $jobPurpose;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?string $jobDutiesResponsibilities;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?string $requiredQualifications;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?string $education;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?string $experience;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?string $knowledge;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?string $workingConditions;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?string $recruitment;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?string $jobSalary;

    #[ORM\Column(type: 'string', length: 500)]
    #[Assert\NotBlank]
    #[Groups(['job_description:read', 'skill:read'])]
    private string $shortDescription;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?string $comment;

    #[ORM\OneToOne(targetEntity: Picture::class, cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(nullable: true)]
    #[ApiProperty(iri: 'https://schema.org/image')]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?Picture $picture = null;

    #[ORM\Column(type: 'datetime_immutable')]
    #[Groups(['job_description:read'])]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime', nullable: true)]
    #[Groups(['job_description:read'])]
    private ?\DateTimeInterface $updatedAt;

    #[ORM\ManyToMany(targetEntity: School::class, inversedBy: 'jobDescriptions')]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?Collection $schools;

    #[ORM\ManyToMany(targetEntity: Skill::class, inversedBy: 'jobDescriptions')]
    #[Groups(['job_description:read'])]
    private Collection $skills;

    #[ORM\OneToMany(mappedBy: 'jobDescription', targetEntity: JobTitle::class, orphanRemoval: true)]
    #[Groups(['job_description:read', 'skill:read'])]
    private Collection $jobTitles;

    #[ORM\OneToMany(mappedBy: 'jobDescription', targetEntity: Ressource::class, orphanRemoval: true)]
    #[Groups(['job_description:read', 'skill:read'])]
    private ?Collection $ressources;

    #[Pure]
    public function __construct()
    {
        $this->schools = new ArrayCollection();
        $this->skills = new ArrayCollection();
        $this->jobTitles = new ArrayCollection();
        $this->ressources = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobPurpose(): ?string
    {
        return $this->jobPurpose;
    }

    public function setJobPurpose(string $jobPurpose): self
    {
        $this->jobPurpose = $jobPurpose;

        return $this;
    }

    public function getJobDutiesResponsibilities(): ?string
    {
        return $this->jobDutiesResponsibilities;
    }

    public function setJobDutiesResponsibilities(?string $jobDutiesResponsibilities): self
    {
        $this->jobDutiesResponsibilities = $jobDutiesResponsibilities;

        return $this;
    }

    public function getRequiredQualifications(): ?string
    {
        return $this->requiredQualifications;
    }

    public function setRequiredQualifications(?string $requiredQualifications): self
    {
        $this->requiredQualifications = $requiredQualifications;

        return $this;
    }

    public function getEducation(): ?string
    {
        return $this->education;
    }

    public function setEducation(?string $education): self
    {
        $this->education = $education;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getKnowledge(): ?string
    {
        return $this->knowledge;
    }

    public function setKnowledge(?string $knowledge): self
    {
        $this->knowledge = $knowledge;

        return $this;
    }

    public function getWorkingConditions(): ?string
    {
        return $this->workingConditions;
    }

    public function setWorkingConditions(?string $workingConditions): self
    {
        $this->workingConditions = $workingConditions;

        return $this;
    }

    public function getRecruitment(): ?string
    {
        return $this->recruitment;
    }

    public function setRecruitment(?string $recruitment): self
    {
        $this->recruitment = $recruitment;

        return $this;
    }

    public function getJobSalary(): ?string
    {
        return $this->jobSalary;
    }

    public function setJobSalary(?string $jobSalary): self
    {
        $this->jobSalary = $jobSalary;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getPicture(): ?Picture
    {
        return $this->picture;
    }

    public function setPicture(?Picture $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    #[ORM\PrePersist()]
    public function prePersist()
    {
        $this->setCreatedAt(new \DateTimeImmutable());
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    #[ORM\PreUpdate()]
    public function preUpdate()
    {
        $this->setUpdatedAt(new \DateTime());
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection<int, School>
     */
    public function getSchools(): Collection
    {
        return $this->schools;
    }

    public function addSchool(School $school): self
    {
        if (!$this->schools->contains($school)) {
            $this->schools[] = $school;
        }

        return $this;
    }

    public function removeSchool(School $school): self
    {
        $this->schools->removeElement($school);

        return $this;
    }

    /**
     * @return Collection<int, Skill>
     */
    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(Skill $skill): self
    {
        if (!$this->skills->contains($skill)) {
            $this->skills[] = $skill;
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        $this->skills->removeElement($skill);

        return $this;
    }

    /**
     * @return Collection<int, JobTitle>
     */
    public function getJobTitles(): Collection
    {
        return $this->jobTitles;
    }

    public function addJobTitle(JobTitle $jobTitle): self
    {
        if (!$this->jobTitles->contains($jobTitle)) {
            $this->jobTitles[] = $jobTitle;
            $jobTitle->setJobDescription($this);
        }

        return $this;
    }

    public function removeJobTitle(JobTitle $jobTitle): self
    {
        if ($this->jobTitles->removeElement($jobTitle)) {
            // set the owning side to null (unless already changed)
            if ($jobTitle->getJobDescription() === $this) {
                $jobTitle->setJobDescription(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Ressource>
     */
    public function getRessources(): Collection
    {
        return $this->ressources;
    }

    public function addRessource(Ressource $ressource): self
    {
        if (!$this->ressources->contains($ressource)) {
            $this->ressources[] = $ressource;
            $ressource->setJobDescription($this);
        }

        return $this;
    }

    public function removeRessource(Ressource $ressource): self
    {
        if ($this->ressources->removeElement($ressource)) {
            // set the owning side to null (unless already changed)
            if ($ressource->getJobDescription() === $this) {
                $ressource->setJobDescription(null);
            }
        }

        return $this;
    }
}
