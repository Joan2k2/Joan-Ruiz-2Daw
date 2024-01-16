<?php

namespace App\Entity;

use App\Repository\DEPTRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DEPTRepository::class)]
class DEPT
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $DEPT_NO = null;

    #[ORM\Column(length: 14)]
    private ?string $DNOMBRE = null;

    #[ORM\Column(length: 14, nullable: true)]
    private ?string $LOC = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $color = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDEPTNO(): ?int
    {
        return $this->DEPT_NO;
    }

    public function setDEPTNO(int $DEPT_NO): static
    {
        $this->DEPT_NO = $DEPT_NO;

        return $this;
    }

    public function getDNOMBRE(): ?string
    {
        return $this->DNOMBRE;
    }

    public function setDNOMBRE(string $DNOMBRE): static
    {
        $this->DNOMBRE = $DNOMBRE;

        return $this;
    }

    public function getLOC(): ?string
    {
        return $this->LOC;
    }

    public function setLOC(?string $LOC): static
    {
        $this->LOC = $LOC;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;

        return $this;
    }
}
