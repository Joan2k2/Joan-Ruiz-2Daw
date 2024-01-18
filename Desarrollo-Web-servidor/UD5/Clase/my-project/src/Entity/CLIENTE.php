<?php

namespace App\Entity;

use App\Repository\CLIENTERepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CLIENTERepository::class)]
class CLIENTE
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"CLIENTE_COD")]
    private ?int $id = null;

    #[ORM\Column(length: 45)]
    private ?string $NOMBRE = null;

    #[ORM\Column(length: 40)]
    private ?string $DIREC = null;

    #[ORM\Column(length: 30)]
    private ?string $CIUDAD = null;

    #[ORM\Column(length: 2, nullable: true)]
    private ?string $ESTADO = null;

    #[ORM\Column(length: 9)]
    private ?string $COD_POSTAL = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $AREA = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $TELEFONO = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 9, scale: 2, nullable: true)]
    private ?string $LIMITE_CREDITO = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $OBSERVACIONES = null;

    #[ORM\ManyToOne(inversedBy: 'CLIENTE_COD')]
    #[ORM\JoinColumn(nullable: false)]
    private ?EMP $REPR_COD = null;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNOMBRE(): ?string
    {
        return $this->NOMBRE;
    }

    public function setNOMBRE(string $NOMBRE): static
    {
        $this->NOMBRE = $NOMBRE;

        return $this;
    }

    public function getDIREC(): ?string
    {
        return $this->DIREC;
    }

    public function setDIREC(string $DIREC): static
    {
        $this->DIREC = $DIREC;

        return $this;
    }

    public function getCIUDAD(): ?string
    {
        return $this->CIUDAD;
    }

    public function setCIUDAD(string $CIUDAD): static
    {
        $this->CIUDAD = $CIUDAD;

        return $this;
    }

    public function getESTADO(): ?string
    {
        return $this->ESTADO;
    }

    public function setESTADO(?string $ESTADO): static
    {
        $this->ESTADO = $ESTADO;

        return $this;
    }

    public function getCODPOSTAL(): ?string
    {
        return $this->COD_POSTAL;
    }

    public function setCODPOSTAL(string $COD_POSTAL): static
    {
        $this->COD_POSTAL = $COD_POSTAL;

        return $this;
    }

    public function getAREA(): ?int
    {
        return $this->AREA;
    }

    public function setAREA(?int $AREA): static
    {
        $this->AREA = $AREA;

        return $this;
    }

    public function getTELEFONO(): ?string
    {
        return $this->TELEFONO;
    }

    public function setTELEFONO(?string $TELEFONO): static
    {
        $this->TELEFONO = $TELEFONO;

        return $this;
    }

    public function getLIMITECREDITO(): ?string
    {
        return $this->LIMITE_CREDITO;
    }

    public function setLIMITECREDITO(?string $LIMITE_CREDITO): static
    {
        $this->LIMITE_CREDITO = $LIMITE_CREDITO;

        return $this;
    }

    public function getOBSERVACIONES(): ?string
    {
        return $this->OBSERVACIONES;
    }

    public function setOBSERVACIONES(?string $OBSERVACIONES): static
    {
        $this->OBSERVACIONES = $OBSERVACIONES;

        return $this;
    }

    public function getREPRCOD(): ?EMP
    {
        return $this->REPR_COD;
    }

    public function setREPRCOD(?EMP $REPR_COD): static
    {
        $this->REPR_COD = $REPR_COD;

        return $this;
    }

    
}
