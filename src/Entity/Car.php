<?php

namespace App\Entity;

use App\Repository\CarRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
class Car
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $ac = null;

    #[ORM\Column(nullable: true)]
    private ?bool $da = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $nbDoor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isac(): ?bool
    {
        return $this->ac;
    }

    public function setac(?bool $ac): static
    {
        $this->ac = $ac;

        return $this;
    }

    public function isDa(): ?bool
    {
        return $this->da;
    }

    public function setDa(?bool $da): static
    {
        $this->da = $da;

        return $this;
    }

    public function getNbDoor(): ?int
    {
        return $this->nbDoor;
    }

    public function setNbDoor(?int $nbDoor): static
    {
        $this->nbDoor = $nbDoor;

        return $this;
    }
}
