<?php
namespace system\factory;

/**
 * Carrier class for the product factory
 *
 * @author Bill
 *        
 */
class Carrier extends AbstractProduct
{

    // TODO - Insert your code here
    
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
        $this->setProductType('carrier');
    }

    /**
     * Destructor
     *
     * {@inheritdoc}
     * @see \system\factory\AbstractProduct::__destruct()
     */
    function __destruct()
    {
        
        // TODO - Insert your code here
    }
}

