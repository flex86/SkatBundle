<?php

namespace Fl3\SkatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spieler
 *
 * @ORM\Table(name="spieler")
 * @ORM\Entity
 */
class Spieler
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fl3\SkatBundle\Entity\Skatgruppe", mappedBy="spieler")
     */
    private $skatgruppe;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fl3\SkatBundle\Entity\Tisch", mappedBy="spieler")
     */
    private $tisch;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skatgruppe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tisch = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set name
     *
     * @param string $name
     * @return Spieler
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Add skatgruppe
     *
     * @param \Fl3\SkatBundle\Entity\Skatgruppe $skatgruppe
     * @return Spieler
     */
    public function addSkatgruppe(\Fl3\SkatBundle\Entity\Skatgruppe $skatgruppe)
    {
        $this->skatgruppe[] = $skatgruppe;
    
        return $this;
    }

    /**
     * Remove skatgruppe
     *
     * @param \Fl3\SkatBundle\Entity\Skatgruppe $skatgruppe
     */
    public function removeSkatgruppe(\Fl3\SkatBundle\Entity\Skatgruppe $skatgruppe)
    {
        $this->skatgruppe->removeElement($skatgruppe);
    }

    /**
     * Get skatgruppe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSkatgruppe()
    {
        return $this->skatgruppe;
    }

    /**
     * Add tisch
     *
     * @param \Fl3\SkatBundle\Entity\Tisch $tisch
     * @return Spieler
     */
    public function addTisch(\Fl3\SkatBundle\Entity\Tisch $tisch)
    {
        $this->tisch[] = $tisch;
    
        return $this;
    }

    /**
     * Remove tisch
     *
     * @param \Fl3\SkatBundle\Entity\Tisch $tisch
     */
    public function removeTisch(\Fl3\SkatBundle\Entity\Tisch $tisch)
    {
        $this->tisch->removeElement($tisch);
    }

    /**
     * Get tisch
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTisch()
    {
        return $this->tisch;
    }
}