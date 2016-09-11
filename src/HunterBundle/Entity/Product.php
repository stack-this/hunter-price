<?php

namespace HunterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="HunterBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="name", type="string", length=128)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="trademark", type="string", length=128)
     */
    private $trademark;

    /**
     * @var float
     *
     * @ORM\Column(name="lower_price", type="float")
     */
    private $lowerPrice;

    /**
     * @var float
     *
     * @ORM\Column(name="higher_price", type="float")
     */
    private $higherPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="last_update", type="string")
     */
    private $lastUpdate;

    /**
     * @var float
     *
     * @ORM\Column(name="quantity", type="float", nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=8, nullable=true)
     */
    private $unit;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=512, nullable=true)
     */
    private $description;    

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="StoreProduct", mappedBy="id_product", cascade={"persist"})
     */
    private $store;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="ListsProduct", mappedBy="id_product")
     */
    private $lists;

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
     * Set trademark
     *
     * @param string $trademark
     * @return Product
     */
    public function setTrademark($trademark)
    {
        $this->trademark = $trademark;

        return $this;
    }

    /**
     * Get trademark
     *
     * @return string
     */
    public function getTrademark()
    {
        return $this->trademark;
    }

    /**
     * Set lowerPrice
     *
     * @param float $lowerPrice
     * @return Product
     */
    public function setLowerPrice($lowerPrice)
    {
        $this->lowerPrice = $lowerPrice;

        return $this;
    }

    /**
     * Get lowerPrice
     *
     * @return float
     */
    public function getLowerPrice()
    {
        return $this->lowerPrice;
    }

    /**
     * Set higherPrice
     *
     * @param float $higherPrice
     * @return Product
     */
    public function setHigherPrice($higherPrice)
    {
        $this->higherPrice = $higherPrice;

        return $this;
    }

    /**
     * Get higherPrice
     *
     * @return float
     */
    public function getHigherPrice()
    {
        return $this->higherPrice;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Product
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set unit
     *
     * @param string $unit
     * @return Product
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set description
     *
     * @param string $description
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
     * Constructor
     */
    public function __construct()
    {
        $this->store = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set category
     *
     * @param \HunterBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\HunterBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \HunterBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add store
     *
     * @param \HunterBundle\Entity\StoreProduct $store
     * @return Product
     */
    public function addStore(\HunterBundle\Entity\StoreProduct $store)
    {
        $this->store[] = $store;

        return $this;
    }

    /**
     * Remove store
     *
     * @param \HunterBundle\Entity\StoreProduct $store
     */
    public function removeStore(\HunterBundle\Entity\StoreProduct $store)
    {
        $this->store->removeElement($store);
    }

    /**
     * Get store
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStore()
    {
        return $this->store;
    }
}
