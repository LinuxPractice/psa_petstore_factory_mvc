<?php
namespace system\factory;

/**
 *
 * @author Bill
 *        
 */
final class StaticProductFactory
{

    /**
     * Factory product creation
     *
     * @param string $type
     * @param array $attributes
     * @throws \Exception
     * @return array
     */
    public static function createProduct(string $type, string $name, float $price, array $attributes): object
    {
        if (strtolower($type) == 'cat') {
            return new Cat($name, $price, $attributes);
        }
        
        if (strtolower($type) == 'dog') {
            return new Dog($name, $price, $attributes);
        }
        
        if (strtolower($type) == 'reptile') {
            return new Reptile($name, $price, $attributes);
        }
        
        if (strtolower($type) == 'carrier') {
            return new Carrier($name, $price, $attributes);
        }
        
        if (strtolower($type) == 'toy') {
            return new Toy($name, $price, $attributes);
        }
        
        throw new \Exception('Unknown product type');
    }
}