<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Postgis
 *
 * @ORM\Table(name="postgis")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostgisRepository")
 */
class Postgis
{
    /**
     * @var int
     *
     * @ORM\Column(name="idgeom", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgeom;


    /**
     * @var idutente
     *
     * @ORM\Column(name="idutente", type="integer", nullable=true) 
     */
     public $idutente;

    /**
     * @var geometry
     *
     * @ORM\Column(name="geometria", type="geometry")
     */
    private $geometria;

    /**
     * @var geography
     *
     * @ORM\Column(name="geography", type="geography", nullable=true) 
     */
    private $geography;

    /**
     * @var idInserimento
     *
     * @ORM\Column(name="idinserimento", type="integer", nullable=true) 
     */
     private $idinserimento;
     
    
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getIdgeom()
    {
        return $this->idgeom;
    }

    /**
     * Set geometria
     *
     * @param geometry $geometria
     * @return Postgis
     */
    public function setGeometria($geometria)
    {
        $this->geometria = $geometria;

        return $this;
    }

    /**
     * Get geometria
     *
     * @return geometry 
     */
    public function getGeometria()
    {
        return $this->geometria;
    }

    /**
     * Set geography
     *
     * @param geography $geography
     * @return Postgis
     */
    public function setGeography($geography)
    {
        $this->geography = $geography;

        return $this;
    }

    /**
     * Get geography
     *
     * @return geography 
     */
    public function getGeography()
    {
        return $this->geography;
    }

    /**
     * Get idInserimento
     *
     * @return idInserimento 
     */
    public function getIdinserimento()
    {
        return $this->idinserimento;
    }

    /**
     * Get idinserimento
     *
     * @return idinserimento 
     */
    public function setIdinserimento()
    {
        return $this->$idinserimento;
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
