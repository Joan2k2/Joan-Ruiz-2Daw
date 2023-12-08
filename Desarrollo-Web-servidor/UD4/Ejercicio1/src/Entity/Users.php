<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 * @ORM\Table(name="tareas") 
 */
class Users
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /** @ORM\Column(type="string", length="16") */
    private $titulo;

    /** @ORM\Column(type="date") */
    private $fecha_creacion;
    /** @ORM\Column(type="string", length="16") */
    private $descripcion;
    /** @ORM\Column(type="date") */
    private $fecha_vencimiento;

    public function getid()
    {
        return $this->id;
    }
    /**
     * Get the value of userId
     */
    public function gettitulo()
    {
        return $this->titulo;
    }

    /**
     * Get the value of userName
     */
    public function getfecha()
    {
        return $this->fecha_creacion;
    }
    /**
     * Get the value of id
     */
    public function setid($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of userName
     *
     * @return  self
     */
    public function settitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Set the value of fecha_creacion
     *
     * @return  self
     */
    public function setfecha($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }




    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Set the value of fecha_vencimiento
     *
     * @return  self
     */
    public function setFecha_vencimiento($fecha_vencimiento)
    {
        $this->fecha_vencimiento = $fecha_vencimiento;

        return $this;
    }
}
