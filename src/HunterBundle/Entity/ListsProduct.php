<?php

namespace HunterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListsProduct
 *
 * @ORM\Table(name="lists_product")
 * @ORM\Entity(repositoryClass="HunterBundle\Repository\ListsProductRepository")
 */
class ListsProduct
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
     * @ORM\ManyToOne(targetEntity="Lists", inversedBy="products")
     * @ORM\JoinColumn(name="id_list", referencedColumnName="id")
     */
    private $id_list;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="lists")
     * @ORM\JoinColumn(name="id_product", referencedColumnName="id")
     */
    private $id_product;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=2, scale=0)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return ListsProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return ListsProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}

