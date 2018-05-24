<?php
// src/AppBundle/Entity/Transaction.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TransactionRepository")
 * @ORM\Table(name="transaction")
 */
class Transaction
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="date")
     */
    private $date;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $user_id;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $product_id;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $qty;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $price_ea;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $price_total;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Transaction
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set userId
     *
     * @param string $userId
     *
     * @return Transaction
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return Transaction
     */
    public function setProductId($productId)
    {
        $this->product_id = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set qty
     *
     * @param integer $qty
     *
     * @return Transaction
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return integer
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set priceEa
     *
     * @param integer $priceEa
     *
     * @return Transaction
     */
    public function setPriceEa($priceEa)
    {
        $this->price_ea = $priceEa;

        return $this;
    }

    /**
     * Get priceEa
     *
     * @return integer
     */
    public function getPriceEa()
    {
        return $this->price_ea;
    }

    /**
     * Set priceTotal
     *
     * @param integer $priceTotal
     *
     * @return Transaction
     */
    public function setPriceTotal($priceTotal)
    {
        $this->price_total = $priceTotal;

        return $this;
    }

    /**
     * Get priceTotal
     *
     * @return integer
     */
    public function getPriceTotal()
    {
        return $this->price_total;
    }
}
