<?php
namespace data;

use system\factory\StaticProductFactory;

/**
 * Generate and optionally view product classes created by the product factory
 *
 * @author Bill
 *        
 *         use ProductObjectCreator::showCreatedClasses to iterate through the created objects
 *        
 */
final class ProductObjectCreator
{

    private $products;

    /**
     * Constructor
     * This will generate and save 25 products with attributes
     * Running this will save data
     * Running more than once will save the same data
     * Change all values to create 25 more products
     * Example
     * StaticProductFactory::createProduct(type,product_name,price,attributes);
     *
     * Attributes must be and associative array. Attributes can be any value and then can be searchable
     * eg array('color'=>'brown','age'=>'5','lifespan'=>'8','breed'=>'persian')
     *
     *
     * @param bool $doIt
     */
    public function __construct(bool $doIt = FALSE)
    {
        if ($doIt) {
            $cat[] = StaticProductFactory::createProduct('cat', 'Bella', '200', array(
                'color' => 'brown',
                'age' => '5',
                'lifespan' => '8',
                'breed' => 'persian'
            ));
            $cat[] = StaticProductFactory::createProduct('cat', 'Shadow', '200', array(
                'color' => 'black',
                'age' => '3',
                'lifespan' => '8',
                'breed' => 'siamese'
            ));
            $cat[] = StaticProductFactory::createProduct('cat', 'Tigger', '200', array(
                'color' => 'brown',
                'age' => '2',
                'lifespan' => '8',
                'breed' => 'persian'
            ));
            $cat[] = StaticProductFactory::createProduct('cat', 'Molly', '200', array(
                'color' => 'orange',
                'age' => '7',
                'lifespan' => '8',
                'breed' => 'sphynx'
            ));
            $cat[] = StaticProductFactory::createProduct('cat', 'Luna', '200', array(
                'color' => 'white',
                'age' => '1',
                'lifespan' => '8',
                'breed' => 'munchkin'
            ));
            
            $dog[] = StaticProductFactory::createProduct('dog', 'Bailey', '200', array(
                'color' => 'brown',
                'age' => '4',
                'lifespan' => '14',
                'breed' => 'pekingese'
            ));
            $dog[] = StaticProductFactory::createProduct('dog', 'Max', '200', array(
                'color' => 'brindle',
                'age' => '7',
                'lifespan' => '12',
                'breed' => 'bulldog'
            ));
            $dog[] = StaticProductFactory::createProduct('dog', 'Rocky', '200', array(
                'color' => 'brindle',
                'age' => '8',
                'lifespan' => '10',
                'breed' => 'pitbull'
            ));
            $dog[] = StaticProductFactory::createProduct('dog', 'Buster', '200', array(
                'color' => 'orange',
                'age' => '5',
                'lifespan' => '14',
                'breed' => 'terrier'
            ));
            $dog[] = StaticProductFactory::createProduct('dog', 'Lucky', '200', array(
                'color' => 'red',
                'age' => '2',
                'lifespan' => '8',
                'breed' => 'irish setter'
            ));
            
            $reptile[] = StaticProductFactory::createProduct('reptile', 'Raphael', '200', array(
                'color' => 'brown',
                'age' => '65',
                'lifespan' => '99',
                'species' => 'tortoise'
            ));
            $reptile[] = StaticProductFactory::createProduct('reptile', 'Slither', '200', array(
                'color' => 'brindle',
                'age' => '1',
                'lifespan' => '10',
                'species' => 'python'
            ));
            $reptile[] = StaticProductFactory::createProduct('reptile', 'Croaker', '200', array(
                'color' => 'brindle',
                'age' => '1',
                'lifespan' => '2',
                'species' => 'frog'
            ));
            $reptile[] = StaticProductFactory::createProduct('reptile', 'Chimera', '200', array(
                'color' => 'orange',
                'age' => '1',
                'lifespan' => '5',
                'species' => 'gecko'
            ));
            $reptile[] = StaticProductFactory::createProduct('reptile', 'Ally', '200', array(
                'color' => 'red',
                'age' => '1',
                'lifespan' => '50',
                'species' => 'alligator'
            ));
            
            $toy[] = StaticProductFactory::createProduct('toy', 'Chew Toy', '10', array(
                'color' => 'green',
                'material' => 'plastic',
                'size' => '3',
                'weight' => '1'
            ));
            $toy[] = StaticProductFactory::createProduct('toy', 'Squeaky Toy', '12.50', array(
                'color' => 'yellow',
                'material' => 'plastic',
                'size' => '4',
                'weight' => '2'
            ));
            $toy[] = StaticProductFactory::createProduct('toy', 'Rope Pull', '4.99', array(
                'color' => 'white',
                'material' => 'hemp',
                'size' => '6',
                'weight' => '5'
            ));
            $toy[] = StaticProductFactory::createProduct('toy', 'Ball', '1.99', array(
                'color' => 'green',
                'material' => 'rubber',
                'size' => '4',
                'weight' => '2'
            ));
            $toy[] = StaticProductFactory::createProduct('toy', 'Large Ball', '3.99', array(
                'color' => 'red',
                'material' => 'rubber',
                'size' => '10',
                'weight' => '1'
            ));
            
            $carrier[] = StaticProductFactory::createProduct('carrier', 'Large Carrier', '49.99', array(
                'color' => 'green',
                'material' => 'plastic',
                'width' => '36',
                'height' => '36'
            ));
            $carrier[] = StaticProductFactory::createProduct('carrier', 'Small Carrier', '19.99', array(
                'color' => 'yellow',
                'material' => 'plastic',
                'width' => '12',
                'height' => '12'
            ));
            $carrier[] = StaticProductFactory::createProduct('carrier', 'Medium Carrier', '29.99', array(
                'color' => 'white',
                'material' => 'metal',
                'width' => '24',
                'height' => '34'
            ));
            $carrier[] = StaticProductFactory::createProduct('carrier', 'Reptile Transport', '5.99', array(
                'color' => 'green',
                'material' => 'metal',
                'width' => '6',
                'height' => '6'
            ));
            $carrier[] = StaticProductFactory::createProduct('carrier', 'Cat Transport', '19.99', array(
                'color' => 'red',
                'material' => 'metal',
                'width' => '10',
                'height' => '10'
            ));
            
            $this->products['data'] = array_merge($cat, $dog, $reptile, $toy, $carrier);
            
            /* save objects */
            
            foreach ($this->products['data'] as $k => $v) {
                $v->save(true);
            }
        }
    }

    /**
     * Display all created classes created by this class
     */
    public function showCreatedClasses()
    {
        foreach ($this->products['data'] as $k => $v) {
            $v->render();
        }
    }
}