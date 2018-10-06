<?php
namespace system\factory;

/**
 *
 * @author Bill
 *        
 */
class Reptile extends AbstractProduct
{

    /**
     *
     * @var string
     */
    protected $species;

    /**
     * Constrcutor
     *
     * @param string $name
     * @param float $price
     * @param array $attributes
     */
    public function __construct(string $name, float $price, array $attributes)
    {
        parent::__construct($name, $price, $attributes);
        $this->setProductType('reptile');
    }

    /**
     * Set product species
     *
     * @param string $species
     */
    public function setSpecies(string $species)
    {
        $this->species = $species;
    }

    /**
     * Get product species
     *
     * @return string
     */
    public function getSpecies(): string
    {
        return $this->species;
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

