<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=ClientsRepository::class)
 * @ORM\Table(name="CLIENTE") 
 */
class Clients
{
  /**
     * @ORM\Id
     * @ORM\Column(name="CLIENTE_COD", type="integer")
     */
    private $CLIENTE_COD;

    /** @ORM\Column(type="string", length="45") */
    private $NOMBRE;

    /** @ORM\Column(type="string", length="40") */
    private $DIREC;

    /** @ORM\Column(type="string", length="30") */
    private $CIUDAD;

    /** @ORM\Column(type="string", length="2") */
    private $ESTADO;

    /** @ORM\Column(type="string", length="9") */
    private $COD_POSTAL;

    /** @ORM\Column(type="integer", length="6") */
    private $AREA;

    /** @ORM\Column(type="string", length="9") */
    private $TELEFONO;

    /** @ORM\Column(type="integer", length="5") */
    private $REPR_COD;

    /** @ORM\Column(type="decimal", precision=9, scale=2) */
    private $LIMITE_CREDITO;

    /** @ORM\Column(type="text") */
    private $OBSERVACIONES;
 
    public function getCliente()
    {
        return $this->CLIENTE_COD;
    }

    public function getNombre()
    {
        return $this->NOMBRE;
    }

    public function setNombre($NOMBRE)
    {
        $this->NOMBRE = $NOMBRE;

        return $this;
    }

    public function getDireccion()
    {
        return $this->DIREC;
    }

    public function setDireccion($DIREC)
    {
        $this->DIREC = $DIREC;

        return $this;
    }

    public function getCiudad()
    {
        return $this->CIUDAD;
    }

    public function setCiduad($CIUDAD)
    {
        $this->CIUDAD = $CIUDAD;

        return $this;
    }

    public function getEstado()
    {
        return $this->ESTADO;
    }

    public function setEstado($ESTADO)
    {
        $this->ESTADO = $ESTADO;

        return $this;
    }

    public function getCodigo()
    {
        return $this->COD_POSTAL;
    }

    public function setCodigo($COD_POSTAL)
    {
        $this->COD_POSTAL = $COD_POSTAL;

        return $this;
    }

    public function getArea()
    {
        return $this->AREA;
    }

    public function setArea($AREA)
    {
        $this->AREA = $AREA;

        return $this;
    }

    public function getTelefono()
    {
        return $this->TELEFONO;
    }

    public function setTelefono($TELEFONO)
    {
        $this->TELEFONO = $TELEFONO;

        return $this;
    }

    public function getReprCod()
    {
        return $this->REPR_COD;
    }

    public function setReprCod($REPR_COD)
    {
        $this->REPR_COD = $REPR_COD;

        return $this;
    }

    public function getLimite()
    {
        return $this->LIMITE_CREDITO;
    }

    public function setLimite($LIMITE_CREDITO)
    {
        $this->LIMITE_CREDITO = $LIMITE_CREDITO;

        return $this;
    }

    public function getObservaciones()
    {
        return $this->OBSERVACIONES;
    }

    public function setObserbaciones($OBSERVACIONES)
    {
        $this->OBSERVACIONES = $OBSERVACIONES;

        return $this;
    }

    /**
     * Set the value of CLIENTE_COD
     *
     * @return  self
     */ 
    public function setCLIENTE_COD($CLIENTE_COD)
    {
        $this->CLIENTE_COD = $CLIENTE_COD;

        return $this;
    }
}
