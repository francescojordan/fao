<?php
//src/AppBundle/Entity/Ritiri.php

namespace AppBundle\Entity\Ritiri;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="ritiri")
 */

class Ritiri

{ /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	
	protected $idritiro;
	
	/*
	 * DATI A GESTIONE DEL CLIENTE
	 */ 
	
	
	
	/**
     * @ORM\Column(type="string", length=35, nullable=TRUE)
	 * RAGIONE SOCIALE
     */
	protected $vaorsr;
	

	/**
	 * @ORM\Column(type="string", length=20, nullable=TRUE)
     * @Assert\Length(
     *      min = 16,
     *      max = 18,
     *      minMessage = "Codice Fiscale non corretto",
     *      maxMessage = "Codice fiscale non corretto"
     * )
	 * CODICE FISCALE
	 */
	protected $codicefiscale;
	/**
     * @ORM\Column(type="string", length=35, nullable=TRUE)
	 * INDIRIZZO
     */
	protected $vaoinr;
	/**
     * @ORM\Column(type="string", length=9, nullable=TRUE)
	 * CAP
     */
	protected $vaocar;
	/**
     * @ORM\Column(type="string", length=35, nullable=TRUE)
	 * LOCALITA
     */
	protected $vaolor;
	/**
     * @ORM\Column(type="string", length=2, nullable=TRUE)
	 * PROVINCIA
     */
	protected $vaoprr;
	/**
     * @ORM\Column(type="string", length=35, nullable=TRUE)
	 * REFERENTE
     */
	protected $vaorer;
	/**
     * @ORM\Column(type="string", length=16, nullable=TRUE)
	 * TELEFONO DA CONTATTARE PER RITIRO
     */
	protected $vaoter;
	/**
     * @ORM\Column(type="string", length=10, nullable=TRUE)
	 * DATA RITIRO RICHIESTA
     */
	protected $vaodar;
	
	/**
     * @ORM\Column(type="time", length=4, nullable=TRUE)
	 * ORA RITIRO RICHIESTA
     */
	protected $vaoor;
	
	/**
     * @ORM\Column(type="string", length=60, nullable=TRUE)
	 * E-MAIL
     */
	protected $vaoemlr;
	
	/**
     * @ORM\Column(type="string", length=16, nullable=TRUE)
     */
	protected $vaosmsr;
	

    /**
     * Get idritiro
     *
     * @return integer 
     */
    public function getIdritiro()
    {
        return $this->idritiro;
    }

    /**
     * Set vaorsr
     *
     * @param string $vaorsr
     * @return Ritiri
     */
    public function setVaorsr($vaorsr)
    {
        $this->vaorsr = $vaorsr;

        return $this;
    }

    /**
     * Get vaorsr
     *
     * @return string 
     */
    public function getVaorsr()
    {
        return $this->vaorsr;
    }

    /**
     * Set vaoinr
     *
     * @param string $vaoinr
     * @return Ritiri
     */
    public function setVaoinr($vaoinr)
    {
        $this->vaoinr = $vaoinr;

        return $this;
    }

    /**
     * Get vaoinr
     *
     * @return string 
     */
    public function getVaoinr()
    {
        return $this->vaoinr;
    }

    /**
     * Set vaocar
     *
     * @param string $vaocar
     * @return Ritiri
     */
    public function setVaocar($vaocar)
    {
        $this->vaocar = $vaocar;

        return $this;
    }

    /**
     * Get vaocar
     *
     * @return string 
     */
    public function getVaocar()
    {
        return $this->vaocar;
    }

    /**
     * Set vaolor
     *
     * @param string $vaolor
     * @return Ritiri
     */
    public function setVaolor($vaolor)
    {
        $this->vaolor = $vaolor;

        return $this;
    }

    /**
     * Get vaolor
     *
     * @return string 
     */
    public function getVaolor()
    {
        return $this->vaolor;
    }

    /**
     * Set vaoprr
     *
     * @param string $vaoprr
     * @return Ritiri
     */
    public function setVaoprr($vaoprr)
    {
        $this->vaoprr = $vaoprr;

        return $this;
    }

    /**
     * Get vaoprr
     *
     * @return string 
     */
    public function getVaoprr()
    {
        return $this->vaoprr;
    }

    /**
     * Set vaorer
     *
     * @param string $vaorer
     * @return Ritiri
     */
    public function setVaorer($vaorer)
    {
        $this->vaorer = $vaorer;

        return $this;
    }

    /**
     * Get vaorer
     *
     * @return string 
     */
    public function getVaorer()
    {
        return $this->vaorer;
    }

    /**
     * Set vaoter
     *
     * @param \DateTime $vaoter
     * @return Ritiri
     */
    public function setVaoter($vaoter)
    {
        $this->vaoter = $vaoter;

        return $this;
    }

    /**
     * Get vaoter
     *
     * @return \DateTime 
     */
    public function getVaoter()
    {
        return $this->vaoter;
    }

    /**
     * Set vaodar
     *
     * @param \DateTime $vaodar
     * @return Ritiri
     */
    public function setVaodar($vaodar)
    {
        $this->vaodar = $vaodar;

        return $this;
    }

    /**
     * Get vaodar
     *
     * @return \DateTime 
     */
    public function getVaodar()
    {
        return $this->vaodar;
    }

    /**
     * Set vaoor
     *
     * @param \DateTime $vaoor
     * @return Ritiri
     */
    public function setVaoor($vaoor)
    {
        $this->vaoor = $vaoor;

        return $this;
    }

    /**
     * Get vaoor
     *
     * @return \DateTime 
     */
    public function getVaoor()
    {
        return $this->vaoor;
    }

    /**
     * Set vaoemlr
     *
     * @param string $vaoemlr
     * @return Ritiri
     */
    public function setVaoemlr($vaoemlr)
    {
        $this->vaoemlr = $vaoemlr;

        return $this;
    }

    /**
     * Get vaoemlr
     *
     * @return string 
     */
    public function getVaoemlr()
    {
        return $this->vaoemlr;
    }

    /**
     * Set vaosmsr
     *
     * @param string $vaosmsr
     * @return Ritiri
     */
    public function setVaosmsr($vaosmsr)
    {
        $this->vaosmsr = $vaosmsr;

        return $this;
    }

    /**
     * Get vaosmsr
     *
     * @return string 
     */
    public function getVaosmsr()
    {
        return $this->vaosmsr;
    }

    /**
     * Set codicefiscale
     *
     * @param string $codicefiscale
     * @return Ritiri
     */
    public function setCodicefiscale($codicefiscale)
    {
        $this->codicefiscale = $codicefiscale;

        return $this;
    }

    /**
     * Get codicefiscale
     *
     * @return string 
     */
    public function getCodicefiscale()
    {
        return $this->codicefiscale;
    }
}
