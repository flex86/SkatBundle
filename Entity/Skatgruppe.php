<?php

namespace Fl3\SkatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skatgruppe
 *
 * @ORM\Table(name="skatgruppe")
 * @ORM\Entity
 */
class Skatgruppe
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
     * @ORM\ManyToMany(targetEntity="Fl3\SkatBundle\Entity\Spieler", inversedBy="skatgruppe")
     * @ORM\JoinTable(name="skatgruppenspieler",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Skatgruppe_ID", referencedColumnName="ID")
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
     * @return Skatgruppe
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
     * Add spieler
     *
     * @param \Fl3\SkatBundle\Entity\Spieler $spieler
     * @return Skatgruppe
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