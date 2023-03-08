<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column]
    private ?int $year_of_foundation = null;

    #[ORM\Column(length: 255)]
    private ?string $arena = null;

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

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getYearOfFoundation(): ?int
    {
        return $this->year_of_foundation;
    }

    public function setYearOfFoundation(int $year_of_foundation): self
    {
        $this->year_of_foundation = $year_of_foundation;

        return $this;
    }

    public function getArena(): ?string
    {
        return $this->arena;
    }

    public function setArena(string $arena): self
    {
        $this->arena = $arena;

        return $this;
    }
}
