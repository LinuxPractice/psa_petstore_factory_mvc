<?php

/* Check Version */
if (version_compare(phpversion(), '7.2.0', '<') == true) {
    exit('This application uses Object type hints and requires PHP7.2+ ');
}
/* End Check Version */

/* Use */
use system\engine\Loader;
use system\engine\Router;
use data\ProductObjectCreator;
/* End Use */

/* auto loader */
include ('AutoLoader.class.php');
$autoload = new \autoLoader();
/* End auto loader */
$isCli = false;
/* Check for cli. set $_GET */
if (php_sapi_name() === 'cli') {
    
    if (count($argv) == 2 && strtolower($argv[1]) == 'help') {
        echo "
usage: php index.php [name=value]  \n
   example [php index.php type=toy attribute=plastic attributename=material]\n
name can be one of \n
\t sort type price \n
\t Attribute searches require both name and value \n
\t attribute=value attributename=value \n\n
sort value can be: [nameasc, namedesc, typeasc, typedesc, priceasc, pricedesc, ageasc,\n
\t agedesc, lifespanasc, lifespandesc] \n
type value can be: [cat, dog, reptile, toy, carrier] \n
price can be an integer or float with no '$' or ','  \n
attributename value can be:  [breed,age,lifespan,color,salePrice,species,\n
\t material,size,weight,width,height ]  \n
attribute value can be: [persian,5,8,brown,100,siamese,3,black,2,sphynx,7, \n
\t orange,munchkin,1,white,pekingese,4,14,bulldog,12,brindle, \n
\t pitbull,10,terrier,irish setter,red,tortoise,65,99,python,frog,gecko, \n
\t alligator,50,,green,plastic,yellow,hemp,6,rubber,36,metal,24,34] \n
    ";
        exit();
    }
    parse_str(implode('&', array_slice($argv, 1)), $_GET);
    $isCli = true;
    $_SERVER['REQUEST_URI'] = '';
}

/* Setup page data array */
$pageData = Array();
/* End Setup page data array */

/* only for initial object creation */
/* running this will populate the database with products */
/* running this again will populate the database with the same products */
/* Must set the parameter to TRUE if you run */
/*
 *
 * $createProductObjects = new ProductObjectCreator(FALSE);
 * $createProductObjects->showCreatedClasses();
 */
/* End only for initial object creation */

/* Router */
$router = new Router($_SERVER['REQUEST_URI'], $isCli);
/* End router */

/* Create a class to hold the request */
$request = new stdClass();
$request->route = $router->getRoute();

if (! empty($_GET['sort'])) {
    $request->sort = filter_var($_GET['sort'], FILTER_SANITIZE_STRING);
}

if (! empty($_GET['attribute'])) {
    $request->attributeFilter['name'] = filter_var(strtolower($_GET['attributename']), FILTER_SANITIZE_STRING);
    $request->attributeFilter['value'] = filter_var(strtolower($_GET['attribute']), FILTER_SANITIZE_STRING);
}

if (! empty($_GET['price'])) {
    $request->priceFilter = filter_var($_GET['price'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_ALLOW_FRACTION | FILTER_FLAG_ALLOW_THOUSAND);
}
if (! empty($_GET['type'])) {
    $request->typeFilter = filter_var(strtolower($_GET['type']), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
}
/* End request class */

/* Load views */
$loader = new Loader();
$loader->themepath = $router->getThemePath();
$controller = $loader->loadController($router, $pageData, $request);
/* Load views */
$loader->loadView('common/header');

/* if method from route exists, execute it otherwise call the entry point@*/
/* TODO move into loader */
if (method_exists($controller, $router->getMethod())) {
    $pageData['body'] = $controller->{$router->getMethod()}();
} else {
    /* Default */
    $pageData['body'] = $controller->index();
}
$loader->loadView($router->getRoute(), $pageData['body']);
$loader->loadView('common/footer');
/* End Load views */
