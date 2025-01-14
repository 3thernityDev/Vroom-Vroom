<?php

namespace App\Entity;

use App\Repository\MotoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MotoRepository::class)]
class Moto extends Vehicle
{
    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $nbWheels = null;

    #[ORM\Column(nullable: true)]
    private ?bool $bagagerie = null;


    public function getNbWheels(): ?int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(?int $nbWheels): static
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }

    public function isBagagerie(): ?bool
    {
        return $this->bagagerie;
    }

    public function setBagagerie(?bool $bagagerie): static
    {
        $this->bagagerie = $bagagerie;

        return $this;
    }
}
