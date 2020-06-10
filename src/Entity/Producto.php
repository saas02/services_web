<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductoRepository::class)
 */
class Producto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $codigo;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcion;

    /**
     * @ORM\Column(type="decimal", precision=30, scale=0)
     */
    private $precio;

    /**
     * @ORM\Column(type="text")
     */
    private $fotos;

    /**
     * @ORM\Column(type="integer")
     */
    private $in_home;

    /**
     * @ORM\Column(type="integer")
     */
    private $in_promo;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_cliente;

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

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): self
    {
        $this->codigo = $codigo;

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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPrecio(): ?string
    {
        return $this->precio;
    }

    public function setPrecio(string $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getFotos(): ?string
    {
        return $this->fotos;
    }

    public function setFotos(string $fotos): self
    {
        $this->fotos = $fotos;

        return $this;
    }

    public function getInHome(): ?int
    {
        return $this->in_home;
    }

    public function setInHome(int $in_home): self
    {
        $this->in_home = $in_home;

        return $this;
    }

    public function getInPromo(): ?int
    {
        return $this->in_promo;
    }

    public function setInPromo(int $in_promo): self
    {
        $this->in_promo = $in_promo;

        return $this;
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
