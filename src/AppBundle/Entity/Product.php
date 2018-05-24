<?php
// src/AppBundle/Entity/Product.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProductRepository")
 * @ORM\Table(name="product")
 */
class Product
{
    /**
     * @ORM\OneToMany(targetEntity="Itinerary", mappedBy="product")
     */
    private $itinerary;

    public function __construct()
    {
        $this->itinerary = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $destination;
    
    /**
     * @ORM\Column(type="date")
     */
    private $depart;
    
    /**
     * @ORM\Column(type="string", length=10)
     */
    private $duration;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $price;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $slot;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $booked;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $sold;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $image;

    /**
     * @ORM\Column(type="text", options={"default":"noimage.jpg"})
     */
    private $description;

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
     * Set name
     *
     * @param string $name
     *
     * @return Product
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
     * Set destination
     *
     * @param string $destination
     *
     * @return Product
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set depart
     *
     * @param \DateTime $depart
     *
     * @return Product
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return \DateTime
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return Product
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set slot
     *
     * @param integer $slot
     *
     * @return Product
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * Get slot
     *
     * @return integer
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Set boooked
     *
     * @param integer $boooked
     *
     * @return Product
     */
    public function setBooked($boooked)
    {
        $this->booked = $booked;

        return $this;
    }

    /**
     * Get boooked
     *
     * @return integer
     */
    public function getBooked()
    {
        return $this->booked;
    }

    /**
     * Set sold
     *
     * @param integer $sold
     *
     * @return Product
     */
    public function setSold($sold)
    {
        $this->sold = $sold;

        return $this;
    }

    /**
     * Get sold
     *
     * @return integer
     */
    public function getSold()
    {
        return $this->sold;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add itinerary
     *
     * @param \AppBundle\Entity\Itinerary $itinerary
     *
     * @return Product
     */
    public function addItinerary(\AppBundle\Entity\Itinerary $itinerary)
    {
        $this->itinerary[] = $itinerary;

        return $this;
    }

    /**
     * Remove itinerary
     *
     * @param \AppBundle\Entity\Itinerary $itinerary
     */
    public function removeItinerary(\AppBundle\Entity\Itinerary $itinerary)
    {
        $this->itinerary->removeElement($itinerary);
    }

    /**
     * Get itinerary
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItinerary()
    {
        return $this->itinerary;
    }
}
