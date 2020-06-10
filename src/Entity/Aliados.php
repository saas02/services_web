<?php

namespace App\Entity;

use App\Repository\AliadosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AliadosRepository::class)
 */
class Aliados
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_cliente;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $informacion;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $fotos;

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
    private $actualizado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCliente(): ?int
    {
        return $this->id_cliente;
    }

    public function setIdCliente(int $id_cliente): self
    {
        $this->id_cliente = $id_cliente;

        return $this;
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

    public function getInformacion(): ?string
    {
        return $this->informacion;
    }

    public function setInformacion(?string $informacion): self
    {
        $this->informacion = $informacion;

        return $this;
    }

    public function getFotos(): ?string
    {
        return $this->fotos;
    }

    public function setFotos(?string $fotos): self
    {
        $this->fotos = $fotos;

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

    public function getActualizado(): ?\DateTimeInterface
    {
        return $this->actualizado;
    }

    public function setActualizado(\DateTimeInterface $actualizado): self
    {
        $this->actualizado = $actualizado;

        return $this;
    }
}
