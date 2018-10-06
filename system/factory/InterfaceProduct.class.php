<?php
namespace system\factory;

/**
 * Interface for the product factory
 *
 * @author Bill
 *        
 */
interface InterfaceProduct
{

    /**
     *
     * @param mixed $name
     * @param mixed $value
     */
    public function setAttribute($name, $value);

    /**
     *
     * @param float $value
     */
    public function setPrice(float $value);

    /**
     *
     * @param string $value
     */
    public function setProductType(string $value);

    /**
     *
     * @param string $value
     */
    public function setProductName(string $value);

    /**
     *
     * @param int $value
     */
    public function setProductAge(int $value);

    /**
     *
     * @param int $value
     */
    public function setProductLifespan(int $value);
}

