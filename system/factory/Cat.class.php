<?php
namespace system\factory;

/**
 *
 * @author Bill
 *        
 */
class Cat extends AbstractProduct
{

    /**
     *
     * @var string
     */
    protected $breed;

    /**
     * Constructor
     *
     * @param string $name
     * @param float $price
     * @param array $attributes
     */
    public function __construct(string $name, float $price, array $attributes)
    {
        parent::__construct($name, $price, $attributes);
        $this->setProductType('cat');
    }

    /**
     * Set Cat breed
     *
     * @param string $breed
     */
    public function setBreed(string $breed)
    {
        $this->breed = $breed;
    }

    /**
     * Get cat breed
     *
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * Destructor
     * {@inheritDoc}
     * @see \system\factory\AbstractProduct::__destruct()
     */
    function __destruct()
    {
        
        // TODO - Insert your code here
    }
}

