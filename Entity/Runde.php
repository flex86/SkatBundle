<?php

namespace Fl3\SkatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Runde
 *
 * @ORM\Table(name="runde")
 * @ORM\Entity
 */
class Runde
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Nummer", type="integer", nullable=false)
     */
    private $nummer;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Fl3\SkatBundle\Entity\Tisch
     *
     * @ORM\ManyToOne(targetEntity="Fl3\SkatBundle\Entity\Tisch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tisch_ID", referencedColumnName="ID")
     * })
     */
    private $tisch;



    /**
     * Set nummer
     *
     * @param integer $nummer
     * @return Runde
     */
    public function setNummer($nummer)
    {
        $this->nummer = $nummer;
    
        return $this;
    }

    /**
     * Get nummer
     *
     * @return integer 
     */
    public function getNummer()
    {
        return $this->nummer;
    }

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
     * Set tisch
     *
     * @param \Fl3\SkatBundle\Entity\Tisch $tisch
     * @return Runde
     */
    public function setTisch(\Fl3\SkatBundle\Entity\Tisch $tisch = null)
    {
        $this->tisch = $tisch;
    
        return $this;
    }

    /**
     * Get tisch
     *
     * @return \Fl3\SkatBundle\Entity\Tisch 
     */
    public function getTisch()
    {
        return $this->tisch;
    }
}