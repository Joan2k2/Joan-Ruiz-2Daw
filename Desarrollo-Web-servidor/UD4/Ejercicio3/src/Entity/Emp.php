<?php

namespace App\Entity;

use App\Repository\EmpRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmpRepository::class)
 * @ORM\Table(name="EMP") 
 */
class Emp
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer" , length="5")
     * @ORM\GeneratedValue
     */
    private $EMP_NO;

    /** @ORM\Column(type="string", length="10") */
    private $APELLIDOS;

    /** @ORM\Column(type="string", length="10") */
    private $OFICIO;

    /** @ORM\Column(type="integer", length="5") */
    private $JEFE;

    /** @ORM\Column(type="datetime") */
    private $FECHA_ALTA;

    /** @ORM\Column(type="integer", length="10") */
    private $SALARIO;

    /** @ORM\Column(type="integer", length="10") */
    private $COMISION;

    /** @ORM\Column(type="integer", length="3") */
    private $DEPT_NO;

    public function getEmp()
    {
        return $this->EMP_NO;
    }
 
    public function getApellidos()
    {
        return $this->APELLIDOS;
    }

    public function setApellidos($APELLIDOS)
    {
        $this->APELLIDOS = $APELLIDOS;

        return $this;
    }


    public function getOficio()
    {
        return $this->OFICIO;
    }

    public function setOficio($OFICIO)
    {
        $this->OFICIO = $OFICIO;

        return $this;
    }

    public function getJefe()
    {
        return $this->JEFE;
    }

    public function setJefe($JEFE)
    {
        $this->JEFE = $JEFE;

        return $this;
    }
     
    public function getFecha()
    {
        return $this->FECHA_ALTA;
    }
    
    public function setFECHA_ALTA($FECHA_ALTA)
    {
        $this->FECHA_ALTA = $FECHA_ALTA;

        return $this;
    }

     
    public function getSalario()
    {
        return $this->SALARIO;
    }

    
    public function setSalario($SALARIO)
    {
        $this->SALARIO = $SALARIO;

        return $this;
    }

     
    public function getComision()
    {
        return $this->COMISION;
    }

    
    public function setComision($COMISION)
    {
        $this->COMISION = $COMISION;

        return $this;
    }

    
    public function getDept_no()
    {
        return $this->DEPT_NO;
    }

    public function setDept_no($DEPT_NO)
    {
        $this->DEPT_NO = $DEPT_NO;

        return $this;
    }
}
