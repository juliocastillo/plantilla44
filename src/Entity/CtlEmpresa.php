<?php

namespace App\Entity;

use App\Repository\CtlEmpresaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CtlEmpresaRepository::class)
 */
class CtlEmpresa
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $origen;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $registroFiscal;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $nit;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $consolidadora;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ctlEmpresas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userAdd;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ctlEmpresas")
     * @ORM\JoinColumn(nullable=true)
     */
    private $userMod;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateMod;

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrigen(): ?string
    {
        return $this->origen;
    }

    public function setOrigen(string $origen): self
    {
        $this->origen = $origen;

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

    public function getRegistroFiscal(): ?string
    {
        return $this->registroFiscal;
    }

    public function setRegistroFiscal(string $registroFiscal): self
    {
        $this->registroFiscal = $registroFiscal;

        return $this;
    }

    public function getNit(): ?string
    {
        return $this->nit;
    }

    public function setNit(string $nit): self
    {
        $this->nit = $nit;

        return $this;
    }

    public function getConsolidadora(): ?bool
    {
        return $this->consolidadora;
    }

    public function setConsolidadora(?bool $consolidadora): self
    {
        $this->consolidadora = $consolidadora;

        return $this;
    }

    public function getUserAdd(): ?User
    {
        return $this->userAdd;
    }

    public function setUserAdd(?User $userAdd): self
    {
        $this->userAdd = $userAdd;

        return $this;
    }
    
    public function getUserMod(): ?User
    {
        return $this->userMod;
    }

    public function setUserMod(?User $userMod): self
    {
        $this->userMod = $userMod;

        return $this;
    }
    
    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getDateMod(): ?\DateTimeInterface
    {
        return $this->dateMod;
    }

    public function setDateMod(?\DateTimeInterface $dateMod): self
    {
        $this->dateMod = $dateMod;

        return $this;
    }
    
}
