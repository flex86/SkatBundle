<?php

namespace Fl3\SkatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Multiplikator
 *
 * @ORM\Table(name="multiplikator")
 * @ORM\Entity
 */
class Multiplikator
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
     * @ORM\Column(name="Reizwert", type="integer", nullable=false)
     */
    private $reizwert;

    /**
     * @var integer
     *
     * @ORM\Column(name="Spielwert", type="integer", nullable=false)
     */
    private $spielwert;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ansagbar", type="boolean", nullable=false)
     */
    private $ansagbar;

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
     * @ORM\ManyToMany(targetEntity="Fl3\SkatBundle\Entity\Spiel", mappedBy="multiplikator")
     */
    private $spiel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fl3\SkatBundle\Entity\Spielfarbe", mappedBy="multiplikator")
     */
    private $spielfarbe;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->spiel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->spielfarbe = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set name
     *
     * @param string $name
     * @return Multiplikator
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
     * Set reizwert
     *
     * @param integer $reizwert
     * @return Multiplikator
     */
    public function setReizwert($reizwert)
    {
        $this->reizwert = $reizwert;
    
        return $this;
    }

    /**
     * Get reizwert
     *
     * @return integer 
     */
    public function getReizwert()
    {
        return $this->reizwert;
    }

    /**
     * Set spielwert
     *
     * @param integer $spielwert
     * @return Multiplikator
     */
    public function setSpielwert($spielwert)
    {
        $this->spielwert = $spielwert;
    
        return $this;
    }

    /**
     * Get spielwert
     *
     * @return integer 
     */
    public function getSpielwert()
    {
        return $this->spielwert;
    }

    /**
     * Set ansagbar
     *
     * @param boolean $ansagbar
     * @return Multiplikator
     */
    public function setAnsagbar($ansagbar)
    {
        $this->ansagbar = $ansagbar;
    
        return $this;
    }

    /**
     * Get ansagbar
     *
     * @return boolean 
     */
    public function getAnsagbar()
    {
        return $this->ansagbar;
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
     * Add spiel
     *
     * @param \Fl3\SkatBundle\Entity\Spiel $spiel
     * @return Multiplikator
     */
    public function addSpiel(\Fl3\SkatBundle\Entity\Spiel $spiel)
    {
        $this->spiel[] = $spiel;
    
        return $this;
    }

    /**
     * Remove spiel
     *
     * @param \Fl3\SkatBundle\Entity\Spiel $spiel
     */
    public function removeSpiel(\Fl3\SkatBundle\Entity\Spiel $spiel)
    {
        $this->spiel->removeElement($spiel);
    }

    /**
     * Get spiel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpiel()
    {
        return $this->spiel;
    }

    /**
     * Add spielfarbe
     *
     * @param \Fl3\SkatBundle\Entity\Spielfarbe $spielfarbe
     * @return Multiplikator
     */
    public function addSpielfarbe(\Fl3\SkatBundle\Entity\Spielfarbe $spielfarbe)
    {
        $this->spielfarbe[] = $spielfarbe;
    
        return $this;
    }

    /**
     * Remove spielfarbe
     *
     * @param \Fl3\SkatBundle\Entity\Spielfarbe $spielfarbe
     */
    public function removeSpielfarbe(\Fl3\SkatBundle\Entity\Spielfarbe $spielfarbe)
    {
        $this->spielfarbe->removeElement($spielfarbe);
    }

    /**
     * Get spielfarbe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpielfarbe()
    {
        return $this->spielfarbe;
    }
}