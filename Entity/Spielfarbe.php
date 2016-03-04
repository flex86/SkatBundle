<?php

namespace Fl3\SkatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spielfarbe
 *
 * @ORM\Table(name="spielfarbe")
 * @ORM\Entity
 */
class Spielfarbe
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
     * @ORM\Column(name="Wert", type="integer", nullable=false)
     */
    private $wert;

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
     * @ORM\ManyToMany(targetEntity="Fl3\SkatBundle\Entity\Multiplikator", inversedBy="spielfarbe")
     * @ORM\JoinTable(name="spielmoeglichkeit",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Spielfarbe_ID", referencedColumnName="ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Multiplikator_ID", referencedColumnName="ID")
     *   }
     * )
     */
    private $multiplikator;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->multiplikator = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set name
     *
     * @param string $name
     * @return Spielfarbe
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
     * Set wert
     *
     * @param integer $wert
     * @return Spielfarbe
     */
    public function setWert($wert)
    {
        $this->wert = $wert;
    
        return $this;
    }

    /**
     * Get wert
     *
     * @return integer 
     */
    public function getWert()
    {
        return $this->wert;
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
     * Add multiplikator
     *
     * @param \Fl3\SkatBundle\Entity\Multiplikator $multiplikator
     * @return Spielfarbe
     */
    public function addMultiplikator(\Fl3\SkatBundle\Entity\Multiplikator $multiplikator)
    {
        $this->multiplikator[] = $multiplikator;
    
        return $this;
    }

    /**
     * Remove multiplikator
     *
     * @param \Fl3\SkatBundle\Entity\Multiplikator $multiplikator
     */
    public function removeMultiplikator(\Fl3\SkatBundle\Entity\Multiplikator $multiplikator)
    {
        $this->multiplikator->removeElement($multiplikator);
    }

    /**
     * Get multiplikator
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMultiplikator()
    {
        return $this->multiplikator;
    }
}