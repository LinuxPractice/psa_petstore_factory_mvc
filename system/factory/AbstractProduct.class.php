<?php
namespace system\factory;

use system\db\DatabaseMysqli;

/**
 * Abstract class for Product factory
 * @author Bill
 *        
 */
abstract class AbstractProduct implements InterfaceProduct
{

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $type;

    /**
     *
     * @var string
     */
    protected $price;

    /**
     *
     * @var integer
     */
    protected $age;

    /**
     *
     * @var integer
     */
    protected $lifespan;

    /**
     * Constructor
     * age and lifespan do not belong in attributes moved to known property for easy sorting
     * Set salePrice if age is over half of lifespan
     * @param string $name
     * @param float $price
     * @param array $attributes
     */
    public function __construct(string $name, float $price, array $attributes)
    {
        $this->setProductName($name);
        $this->setPrice($price);
        if (\is_array($attributes)) {
            foreach ($attributes as $k => $v) {
                if (stristr($k, 'lifespan')) {
                    $this->setProductLifeSpan((int) $v);
                    continue;
                }
                if (stristr($k, 'age')) {
                    $this->setProductAge((int) $v);
                    continue;
                }
                
                if (! empty($this->age) && ! empty($this->lifespan)) {
                    if ($this->age / (int) $this->lifespan > .5) {
                        $this->salePrice = $this->price / 2;
                    }
                }
                $this->setAttribute($k, $v);
            }
        }
    }

    /**
     * 
     * {@inheritDoc}
     * @see \system\factory\InterfaceProduct::setAttribute()
     */
    public function setAttribute($name, $value)
    {
        $this->$name = $value;
    }

    /**
     * 
     * {@inheritDoc}
     * @see \system\factory\InterfaceProduct::setPrice()
     */
    public function setPrice(float $value)
    {
        $this->price = $value;
    }

    /**
     * 
     * {@inheritDoc}
     * @see \system\factory\InterfaceProduct::setProductName()
     */
    public function setProductName(string $value)
    {
        $this->name = $value;
    }

    /**
     * 
     * {@inheritDoc}
     * @see \system\factory\InterfaceProduct::setProductType()
     */
    public function setProductType(string $value)
    {
        $this->type = $value;
    }

    /**
     * 
     * {@inheritDoc}
     * @see \system\factory\InterfaceProduct::setProductAge()
     */
    public function setProductAge(int $value)
    {
        $this->age = $value;
    }

    /**
     * 
     * @param int $value
     */
    public function setProductLifeSpan(int $value)
    {
        $this->lifespan = $value;
    }

    /**
     * 
     * @return string
     */
    public function getAttribute(): string
    {
        return $this->$name;
    }

    /**
     * 
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * 
     * @return string
     */
    public function getProductType(): string
    {
        return $this->type;
    }

    /**
     * 
     * @return string
     */
    public function getProductName(): string
    {
        return $this->name;
    }

    /**
     * 
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * 
     * @return int
     */
    public function getLifeSpan(): int
    {
        return $this->lifespan;
    }

    /**
     * Render object propeties
     */
    public function render()
    {
        $vars = get_object_vars($this);
        echo '<hr>';
        foreach ($vars as $k => $v) {
            if (! empty($v)) {
                echo ucwords($k) . ':  ' . ucwords($v) . '<br>';
            }
        }
        echo '<hr><br>';
    }

    /**
     * Save this object odatabase
     * @param string $confirm
     * @return bool     
     */    
    public function save(string $confirm = NULL): bool
    {
        if (empty($confirm)) {
            return false;
        }
        $db = DatabaseMysqli::getInstance();
        $queryP = "insert into  psa_products (product_name,product_type,product_price) values ('$this->name','$this->type', '$this->price');";
        $db->execQuery($queryP);
        echo '<br>';
        $productId = $db->connection->insert_id;
        echo '<br>';
        echo 'executing:  ' . $queryP;
        echo '<br>';
        $vars = get_object_vars($this);
        foreach ($vars as $k => $v) {
            if ($k != 'type' && $k != 'price' && $k != 'name' && ! empty($k)) {
                $queryA = "insert into  psa_attributes (product_id,attribute_name,attribute_value) values ('$productId','$k','$v');";
                $db->execQuery($queryA);
                echo 'executing:  ' . $queryA;
                echo '<br>';
            }
        }
        echo 'executing:  ' . $queryP;
        echo '<br>';
        echo 'Your products have been saved.  Good Luck!';
        return true;
    }

    /**
     * Destructor
     */
    function __destruct()
    {
        
        // TODO - Insert your code here
    }
}

