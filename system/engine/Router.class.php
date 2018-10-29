<?php
namespace system\engine;

/**
 *
 * @author Bill
 *        
 */
class Router
{

    /**
     * Route for determining controller to load
     *
     * @var string
     */
    private $route;

    /**
     * Route for determining which theme to load
     *
     * @var string
     */
    private $themePath;

    /**
     * Route for determining which method to execute
     *
     * @var string
     */
    private $method;

    /**
     *
     * @param string $uri
     * @param bool $isCli
     */
    public function __construct(string $uri, bool $isCli = false)
    {
        if (! $isCli) {
            $params = preg_split('~\/~', $uri, null, PREG_SPLIT_NO_EMPTY);
            if (empty($params[0])) {
                $this->setRoute('Index');
                $this->setThemePath('default');
            } else {
                switch (strtolower($params[0])) {
                    case 'api':
                        $this->setRoute('Index');
                        $this->setThemePath('api');
                        break;
                    case 'xml':
                        $this->setRoute('Index');
                        $this->setThemePath('xml');
                        break;
                    case 'react':
                        $this->setRoute('Index');
                        $this->setThemePath('react');
                        break;
                    default:
                        $this->setRoute('Index');
                        $this->setThemePath('default');
                        break;
                }
            }
        } else {
            /* Defaults for cli */
            $this->setRoute('Index');
            $this->setThemePath('cli');
        }
        
        if (! empty($params[1])) {
            $this->setMethod($params[1]);
        } else {
            /* Default to index */
            $this->setMethod('index');
        }
    }


    /**
     * Get route
     *
     * @return string
     */
    public function getRoute(): string
    {
        return $this->route;
    }

    /**
     * Set route
     *
     * @param string $route
     */
    public function setRoute(string $route)
    {
        $this->route = filter_var($route, FILTER_SANITIZE_STRING);
    }

    /**
     * Get the themepath
     *
     * @return string
     */
    public function getThemePath(): string
    {
        return $this->themePath;
    }

    /**
     * Set the themepath
     *
     * @param string $theme
     */
    public function setThemePath(string $theme)
    {
        $theme = strtolower(filter_var($theme, FILTER_SANITIZE_STRING));
        $this->themePath = "app/view/themes/$theme/";
    }

    /**
     * Get the method to execute on the controller
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Set the method to execute on the controller
     *
     * @param string $theme
     */
    public function setMethod(string $method)
    {
        $method = strtolower(filter_var($method, FILTER_SANITIZE_STRING));
        $this->method = $method;
    }
}

