<?php
namespace system\engine;

/**
 * Loader class to dynamically load components of MVC
 * @author Bill
 *        
 */
class Loader
{
    /**
     * Default theme path
     * Public to set easily
     * @TODO create a setter and getter for this
     * @var string
     */
    public $themepath = 'app/view/themes/default/';

    /**
     * Load a view
     * @param string $view
     * @param array $pageData
     */
    public function loadView(string $view, array $pageData = NULL)
    {
        $view = strtolower($view);
        $viewpath = $this->themepath . $view . '.php';
        if (file_exists($viewpath)) {
            require ($viewpath);
        } else {
            echo 'cannot find view';
        }
    }

    /**
     * Load a controller
     * @param string $controller
     * @param array $pageData
     * @return object
     */
    public function loadController(Router $router, array $pageData = NULL, $request): object
    {
        $controller = $router->getRoute();
        
        $controllerpath = 'app/controller/' . $controller . '.class.php';
        if (file_exists($controllerpath)) {
            require ($controllerpath);
            $class = '\\app\\controller\\' . $controller;
            return new $class($request);
        } else {
            echo 'cannot find controller' . $controllerpath;
        }
    }

    /**
     * Load a model
     * @param string $model
     * @param array $pageData
     * @return object
     */
    public function loadModel(string $model, array $pageData = NULL): object
    {
        $modelpath = 'app/model/' . $model . '.class.php';
        if (file_exists($modelpath)) {
            require ($modelpath);
            $class = '\\app\\model\\' . $model;
            return new $class();
        } else {
            echo 'cannot find model' . $modelpath;
        }
    }
}

