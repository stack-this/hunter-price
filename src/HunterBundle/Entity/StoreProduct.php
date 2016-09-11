<?php

namespace HunterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoreProduct
 *
 * @ORM\Table(name="store_product")
 * @ORM\Entity(repositoryClass="HunterBundle\Repository\StoreProductRepository")
 */
class StoreProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Store", inversedBy="product", cascade={"persist"})
     * @ORM\JoinColumn(name="id_store", referencedColumnName="id")
     */
    private $id_store;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="store", cascade={"persist"})
     * @ORM\JoinColumn(name="id_product", referencedColumnName="id")
     */
    private $id_product;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

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
     * Set price
     *
     * @param float $price
     * @return StoreProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set id_store
     *
     * @param \HunterBundle\Entity\Store $idStore
     * @return StoreProduct
     */
    public function setIdStore(\HunterBundle\Entity\Store $idStore = null)
    {
        $this->id_store = $idStore;

        return $this;
    }

    /**
     * Get id_store
     *
     * @return \HunterBundle\Entity\Store 
     */
    public function getIdStore()
    {
        return $this->id_store;
    }

    /**
     * Set id_product
     *
     * @param \HunterBundle\Entity\Product $idProduct
     * @return StoreProduct
     */
    public function setIdProduct(\HunterBundle\Entity\Product $idProduct = null)
    {
        $this->id_product = $idProduct;

        return $this;
    }

    /**
     * Get id_product
     *
     * @return \HunterBundle\Entity\Product 
     */
    public function getIdProduct()
    {
        return $this->id_product;
    }
}
