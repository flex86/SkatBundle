<?php

namespace Fl3\SkatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spiel
 *
 * @ORM\Table(name="spiel")
 * @ORM\Entity
 */
class Spiel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Fl3\SkatBundle\Entity\Spielfarbe
     *
     * @ORM\ManyToOne(targetEntity="Fl3\SkatBundle\Entity\Spielfarbe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Spielfarbe_ID", referencedColumnName="ID")
     * })
     */
    private $spielfarbe;

    /**
     * @var \Fl3\SkatBundle\Entity\Spieler
     *
     * @ORM\ManyToOne(targetEntity="Fl3\SkatBundle\Entity\Spieler")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Spieler_ID", referencedColumnName="ID")
     * })
     */
    private $spieler;

    /**
     * @var \Fl3\SkatBundle\Entity\Runde
     *
     * @ORM\ManyToOne(targetEntity="Fl3\SkatBundle\Entity\Runde")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Runde_ID", referencedColumnName="ID")
     * })
     */
    private $runde;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fl3\SkatBundle\Entity\Multiplikator", inversedBy="spiel")
     * @ORM\JoinTable(name="spielmultiplikator",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Spiel_ID", referencedColumnName="ID")
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set spielfarbe
     *
     * @param \Fl3\SkatBundle\Entity\Spielfarbe $spielfarbe
     * @return Spiel
     */
    public function setSpielfarbe(\Fl3\SkatBundle\Entity\Spielfarbe $spielfarbe = null)
    {
        $this->spielfarbe = $spielfarbe;
    
        return $this;
    }

    /**
     * Get spielfarbe
     *
     * @return \Fl3\SkatBundle\Entity\Spielfarbe 
     */
    public function getSpielfarbe()
    {
        return $this->spielfarbe;
    }

    /**
     * Set spieler
     *
     * @param \Fl3\SkatBundle\Entity\Spieler $spieler
     * @return Spiel
     */
    public function setSpieler(\Fl3\SkatBundle\Entity\Spieler $spieler = null)
    {
        $this->spieler = $spieler;
    
        return $this;
    }

    /**
     * Get spieler
     *
     * @return \Fl3\SkatBundle\Entity\Spieler 
     */
    public function getSpieler()
    {
        return $this->spieler;
    }

    /**
     * Set runde
     *
     * @param \Fl3\SkatBundle\Entity\Runde $runde
     * @return Spiel
     */
    public function setRunde(\Fl3\SkatBundle\Entity\Runde $runde = null)
    {
        $this->runde = $runde;
    
        return $this;
    }

    /**
     * Get runde
     *
     * @return \Fl3\SkatBundle\Entity\Runde 
     */
    public function getRunde()
    {
        return $this->runde;
    }

    /**
     * Add multiplikator
     *
     * @param \Fl3\SkatBundle\Entity\Multiplikator $multiplikator
     * @return Spiel
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