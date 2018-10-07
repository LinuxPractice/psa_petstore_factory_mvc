# PHP Project

## Prerequisites

- PHP 7.2 or greater is required 

## Configure

1. Modify the database connection object
  -   /system/db/Config.class.php
  -   DB_SERVER - Server to connect to
  -   DB_DATABASE - Database to connect to
  -   DB_USER - Database user
  -   DB_PASS - Database password

## Usage
### CLI
List all products 
    [php index.php]
Online help is available
    [php index.php help]


usage: php index.php [name=value]  
   example [php index.php type=toy attribute=plastic attributename=material]
name can be one of 
 sort type price 
 Attribute searches require both name and value 
 attribute=value attributename=value 
sort value can be: [nameasc, namedesc, typeasc, typedesc, priceasc, pricedesc, ageasc,
 agedesc, lifespanasc, lifespandesc] 
type value can be: [cat, dog, reptile, toy, carrier] 
price can be an integer or float with no '$' or ','  
attributename value can be:  [breed,age,lifespan,color,salePrice,species,
 material,size,weight,width,height ]  
attribute value can be: [persian,5,8,brown,100,siamese,3,black,2,sphynx,7, 
 orange,munchkin,1,white,pekingese,4,14,bulldog,12,brindle, 
 pitbull,10,terrier,irish setter,red,tortoise,65,99,python,frog,gecko, 
 alligator,50,,green,plastic,yellow,hemp,6,rubber,36,metal,24,34] 

### Webserver
  
Place project under the document root

## Creating initial objects
A ProductObjectCreator class is provided under /data

    The ProductObjectCreator class will generate and save 25 products with attributes
    Instantiating ProductObjectCreator will save data
    Instantiating more than once will save the same data
    Change all values in the supplied calls to create 25 more products
    
    Example
    StaticProductFactory::createProduct(type,product_name,price,attributes);

    Attributes must be and associative array. Attributes can be any value and then can be searchable
    eg array('color'=>'brown','age'=>'5','lifespan'=>'8','breed'=>'persian')

        Must pass true to the constructor

        $createProductObjects = new ProductObjectCreator(TRUE);
        $createProductObjects->showCreatedClasses();




