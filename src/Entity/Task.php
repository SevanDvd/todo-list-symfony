<?php

namespace App\Entity;

use App\Enum\TaskPriority;
use App\Enum\TaskType;
use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
#[Broadcast]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 1000)]
    private ?string $description = null;

    #[ORM\Column(enumType: TaskPriority::class)]
    private ?TaskPriority $priorityLevel = null;

    #[ORM\Column(enumType: TaskType::class)]
    private ?TaskType $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPriorityLevel(): ?TaskPriority
    {
        return $this->priorityLevel;
    }

    public function setPriorityLevel(TaskPriority $priorityLevel): static
    {
        $this->priorityLevel = $priorityLevel;

        return $this;
    }

    public function getType(): ?TaskType
    {
        return $this->type;
    }

    public function setType(TaskType $type): static
    {
        $this->type = $type;

        return $this;
    }
}
