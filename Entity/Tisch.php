<?php

namespace Fl3\SkatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tisch
 *
 * @ORM\Table(name="tisch")
 * @ORM\Entity
 */
class Tisch
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=45, nullable=true)
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
     * @var \Fl3\SkatBundle\Entity\Turnier
     *
     * @ORM\ManyToOne(targetEntity="Fl3\SkatBundle\Entity\Turnier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Turnier_ID", referencedColumnName="ID"),
     *   @ORM\JoinColumn(name="Turnier_Skatgruppe_ID", referencedColumnName="Skatgruppe_ID")
     * })
     */
    private $turnier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fl3\SkatBundle\Entity\Spieler", inversedBy="tisch")
     * @ORM\JoinTable(name="mitspieler",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Tisch_ID", referencedColumnName="ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Spieler_ID", referencedColumnName="ID")
     *   }
     * )
     */
    private $spieler;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->spieler = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set name
     *
     * @param string $name
     * @return Tisch
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
     * Set turnier
     *
     * @param \Fl3\SkatBundle\Entity\Turnier $turnier
     * @return Tisch
     */
    public function setTurnier(\Fl3\SkatBundle\Entity\Turnier $turnier = null)
    {
        $this->turnier = $turnier;
    
        return $this;
    }

    /**
     * Get turnier
     *
     * @return \Fl3\SkatBundle\Entity\Turnier 
     */
    public function getTurnier()
    {
        return $this->turnier;
    }

    /**
     * Add spieler
     *
     * @param \Fl3\SkatBundle\Entity\Spieler $spieler
     * @return Tisch
     */
    public function addSpieler(\Fl3\SkatBundle\Entity\Spieler $spieler)
    {
        $this->spieler[] = $spieler;
    
        return $this;
    }

    /**
     * Remove spieler
     *
     * @param \Fl3\SkatBundle\Entity\Spieler $spieler
     */
    public function removeSpieler(\Fl3\SkatBundle\Entity\Spieler $spieler)
    {
        $this->spieler->removeElement($spieler);
    }

    /**
     * Get spieler
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpieler()
    {
        return $this->spieler;
    }
}