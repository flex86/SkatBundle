<?php

namespace Fl3\SkatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Turnier
 *
 * @ORM\Table(name="turnier")
 * @ORM\Entity
 */
class Turnier
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datum", type="datetime", nullable=false)
     */
    private $datum;

    /**
     * @var string
     *
     * @ORM\Column(name="Ort", type="string", length=45, nullable=true)
     */
    private $ort;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \Fl3\SkatBundle\Entity\Skatgruppe
     *
     * @ORM\OneToOne(targetEntity="Fl3\SkatBundle\Entity\Skatgruppe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Skatgruppe_ID", referencedColumnName="ID", unique=true)
     * })
     */
    private $skatgruppe;



    /**
     * Set datum
     *
     * @param \DateTime $datum
     * @return Turnier
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;
    
        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime 
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set ort
     *
     * @param string $ort
     * @return Turnier
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
    
        return $this;
    }

    /**
     * Get ort
     *
     * @return string 
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Turnier
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
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
     * Set skatgruppe
     *
     * @param \Fl3\SkatBundle\Entity\Skatgruppe $skatgruppe
     * @return Turnier
     */
    public function setSkatgruppe(\Fl3\SkatBundle\Entity\Skatgruppe $skatgruppe = null)
    {
        $this->skatgruppe = $skatgruppe;
    
        return $this;
    }

    /**
     * Get skatgruppe
     *
     * @return \Fl3\SkatBundle\Entity\Skatgruppe 
     */
    public function getSkatgruppe()
    {
        return $this->skatgruppe;
    }
}