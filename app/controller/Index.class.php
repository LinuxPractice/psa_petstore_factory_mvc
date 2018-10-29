<?php
namespace app\controller;

use system\engine\AbstractController;
use system\engine\Loader;

/**
 * Index controller for home page
 * @author Bill
 *        
 */
class Index extends AbstractController
{

    /**
     * Constructor
     * 
     * @param Object $request
     * @TODO - Place $loader in AbstractController
     */
    public function __construct($request)
    {
        $this->request = $request;        
        $loader = new Loader();
        parent::__construct();
    }

    /**
     * Entry point for controller
     *
     * {@inheritdoc}
     * @see \system\engine\AbstractController::index()
     */
    public function index()
    {
        // $search = new \app\model\ProductSearch();
        $loader = new Loader();
        
        $search = $loader->loadModel('ProductSearch');
        
        if (! empty($this->request->sort)) {
            $search->setSort($this->request->sort);
        }
        
        if (! empty($this->request->attributeFilter)) {
            
            $search->setAttributeFilter($this->request->attributeFilter);
        }
        
        if (! empty($this->request->priceFilter)) {
            
            $search->setPriceFilter($this->request->priceFilter);
        }
        
        if (! empty($this->request->typeFilter)) {
            $search->setTypeFilter($this->request->typeFilter);
        }
        
        if (! empty($this->request->searchString)) {
            $search->setSearchString($this->request->searchString);
        }
        
        
        $results = $search->getProducts();
        if (! empty($results['data'])) {
            
            foreach ($results['data'] as $k => $v) {
                if (! empty($v->attributes)) {
                    
                    $arr = explode('|', $v->attributes);
                    /* remove the attributes string, this will be reset by the generated array */
                    unset($v->attributes);
                    foreach ($arr as $k2 => $v2) {
                        /* remove trailing ; */
                        $v2 = rtrim($v2, ';');
                        $arr2 = explode(';', $v2);
                        
                        /* assign to index and value for insertion into the attributes array */
                        foreach ($arr2 as $k3 => $v3) {
                            $arr3 = explode(':', $v3);
                            $attr[$arr3[0]] = $arr3[1];
                        }
                        
                        /* Sales price - half off when over half its lifespan - no formula given */
                        if (! empty($v->age) && ! empty($v->lifespan)) {
                            $used = (double) $v->age / (double) $v->lifespan;
                            if ($used > .5) {
                                $v->salePrice = ($v->product_price * .5);
                            }
                        }
                    }
                    $v->attributes[] = $attr;
                    /* unset for the next iteration */
                    unset($attr);
                }
                
               // $c1 = StaticProductFactory::createProduct($v->product_type, $v->product_name, (float) $v->product_price, $v->attributes[0]);
               // $c1->render();
            }
        } else {
            echo '<pre>';
            // var_dump($results);
            echo '</pre>';
            $results['data'] = 'No Results';
            $results['num_rows'] = 0;
        }
        return $results;
    }

    /**
     * Destructor
     * {@inheritDoc}
     * @see \system\engine\AbstractController::__destruct()
     */
    function __destruct()
    {}
}

