<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pesca
 *
 * @ORM\Table(name="pesca")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PescaRepository")
 */
class Pesca
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="valorePescato", type="integer")
     */
    private $valorePescato;

    /**
     * @var int
     *
     * @ORM\Column(name="tipologiaPesca", type="integer")
     */
    private $tipologiaPesca;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataInserimento", type="date")
     */
    private $dataInserimento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataFine", type="date")
     */
    private $dataFine;

    /**     *
     */
    public $geojson;
    
     /**     *
     */
    public $idutente;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set valorePescato
     *
     * @param integer $valorePescato
     * @return Pesca
     */
    public function setValorePescato($valorePescato)
    {
        $this->valorePescato = $valorePescato;

        return $this;
    }

    /**
     * Get valorePescato
     *
     * @return integer 
     */
    public function getValorePescato()
    {
        return $this->valorePescato;
    }

    /**
     * Set tipologiaPesca
     *
     * @param integer $tipologiaPesca
     * @return Pesca
     */
    public function setTipologiaPesca($tipologiaPesca)
    {
        $this->tipologiaPesca = $tipologiaPesca;

        return $this;
    }

    /**
     * Get tipologiaPesca
     *
     * @return integer 
     */
    public function getTipologiaPesca()
    {
        return $this->tipologiaPesca;
    }

    /**
     * Set dataInserimento
     *
     * @param \DateTime $dataInserimento
     * @return Pesca
     */
    public function setDataInserimento($dataInserimento)
    {
        $this->dataInserimento = $dataInserimento;

        return $this;
    }

    /**
     * Get dataInserimento
     *
     * @return \DateTime 
     */
    public function getDataInserimento()
    {
        return $this->dataInserimento;
    }

    /**
     * Set dataFine
     *
     * @param \DateTime $dataFine
     * @return Pesca
     */
    public function setDataFine($dataFine)
    {
        $this->dataFine = $dataFine;

        return $this;
    }

    /**
     * Get dataFine
     *
     * @return \DateTime 
     */
    public function getDataFine()
    {
        return $this->dataFine;
    }

 /**
     * Get geojson
     *
     */
    public function getGeojson()
    {
        return $this->geojson;
    }
    
    /**
     * Get idutente
     *
     * @return idutente 
     */
    public function getIdutente()
    {
        return $this->idutente;
    }

    /**
     * Get idutente
     *
     * @return idutente 
     */
    public function setIdutente($idutente)
    {
            $this->idutente = $idutente;

        return $this;

}
}
