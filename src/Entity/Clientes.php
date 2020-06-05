<?php

namespace App\Entity;

use App\Repository\ClientesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientesRepository::class)
 */
class Clientes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $whatsapp;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $facebook;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $dominio;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $parametros;

    /**
     * @ORM\Column(type="integer")
     */
    private $estado;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creacion;

    /**
     * @ORM\Column(type="datetime")
     */
    private $actualizacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getWhatsapp(): ?string
    {
        return $this->whatsapp;
    }

    public function setWhatsapp(?string $whatsapp): self
    {
        $this->whatsapp = $whatsapp;

        return $this;
    }

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function setFacebook(?string $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function getDominio(): ?string
    {
        return $this->dominio;
    }

    public function setDominio(string $dominio): self
    {
        $this->dominio = $dominio;

        return $this;
    }

    public function getParametros(): ?string
    {
        return $this->parametros;
    }

    public function setParametros(?string $parametros): self
    {
        $this->parametros = $parametros;

        return $this;
    }

    public function getEstado(): ?int
    {
        return $this->estado;
    }

    public function setEstado(int $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getCreacion(): ?\DateTimeInterface
    {
        return $this->creacion;
    }

    public function setCreacion(\DateTimeInterface $creacion): self
    {
        $this->creacion = $creacion;

        return $this;
    }

    public function getActualizacion(): ?\DateTimeInterface
    {
        return $this->actualizacion;
    }

    public function setActualizacion(\DateTimeInterface $actualizacion): self
    {
        $this->actualizacion = $actualizacion;

        return $this;
    }
}
