<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gruppi
 *
 * @ORM\Table(name="gruppi")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GruppiRepository")
 */
class Gruppi
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
     * @var string
     *
     * @ORM\Column(name="nomegruppo", type="string", length=255)
     */
    private $nomegruppo;


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
     * Set nomegruppo
     *
     * @param string $nomegruppo
     * @return Gruppi
     */
    public function setNomegruppo($nomegruppo)
    {
        $this->nomegruppo = $nomegruppo;

        return $this;
    }

    /**
     * Get nomegruppo
     *
     * @return string 
     */
    public function getNomegruppo()
    {
        return $this->nomegruppo;
    }
}
