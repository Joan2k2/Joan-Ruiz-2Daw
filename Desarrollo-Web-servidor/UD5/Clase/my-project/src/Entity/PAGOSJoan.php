<?php

namespace App\Entity;

use App\Repository\PAGOSJoanRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PAGOSJoanRepository::class)]
class PAGOSJoan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "JoanPK")]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $pago = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\ManyToOne(inversedBy: 'pAGOSJoans')]
    #[ORM\JoinColumn(name:"emp", referencedColumnName:"emp_no")]
    private ?Emp $emp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPago(): ?int
    {
        return $this->pago;
    }

    public function setPago(int $pago): static
    {
        $this->pago = $pago;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getEmp(): ?Emp
    {
        return $this->emp;
    }

    public function setEmp(?Emp $emp): static
    {
        $this->emp = $emp;

        return $this;
    }
}
