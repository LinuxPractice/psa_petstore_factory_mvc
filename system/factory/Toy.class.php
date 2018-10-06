<?php
namespace system\factory;

/**
 *
 * @author Bill
 *        
 */
class Toy extends AbstractProduct
{

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
        $this->setProductType('toy');
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

