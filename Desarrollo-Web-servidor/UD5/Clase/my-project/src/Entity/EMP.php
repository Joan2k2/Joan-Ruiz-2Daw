<?php

namespace App\Entity;

use App\Repository\EMPRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EMPRepository::class)]
class EMP
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $EMP_NO = null;

    #[ORM\Column(length: 10)]
    private ?string $APELLIDOS = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $OFICIO = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $JEFE = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $FECHA_ALTA = null;

    #[ORM\Column(nullable: true)]
    private ?int $SALARIO = null;

    #[ORM\Column(nullable: true)]
    private ?int $COMISION = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEMPNO(): ?int
    {
        return $this->EMP_NO;
    }

    public function setEMPNO(int $EMP_NO): static
    {
        $this->EMP_NO = $EMP_NO;

        return $this;
    }

    public function getAPELLIDOS(): ?string
    {
        return $this->APELLIDOS;
    }

    public function setAPELLIDOS(string $APELLIDOS): static
    {
        $this->APELLIDOS = $APELLIDOS;

        return $this;
    }

    public function getOFICIO(): ?string
    {
        return $this->OFICIO;
    }

    public function setOFICIO(?string $OFICIO): static
    {
        $this->OFICIO = $OFICIO;

        return $this;
    }

    public function getJEFE(): ?int
    {
        return $this->JEFE;
    }

    public function setJEFE(?int $JEFE): static
    {
        $this->JEFE = $JEFE;

        return $this;
    }

    public function getFECHAALTA(): ?\DateTimeInterface
    {
        return $this->FECHA_ALTA;
    }

    public function setFECHAALTA(?\DateTimeInterface $FECHA_ALTA): static
    {
        $this->FECHA_ALTA = $FECHA_ALTA;

        return $this;
    }

    public function getSALARIO(): ?int
    {
        return $this->SALARIO;
    }

    public function setSALARIO(?int $SALARIO): static
    {
        $this->SALARIO = $SALARIO;

        return $this;
    }

    public function getCOMISION(): ?int
    {
        return $this->COMISION;
    }

    public function setCOMISION(?int $COMISION): static
    {
        $this->COMISION = $COMISION;

        return $this;
    }
}
