<?php
namespace system\engine;

/**
 * Configuration object to hold configuration parameters for application
 *
 * @author Bill
 *        
 */
class Config
{

    /**
     * Class instance
     *
     * @var object
     */
    private static $instance = null;

    /**
     * Make constructor private so that object cannot be created outside
     */
    private function __construct()
    {
        $this->route = NULL;
    }

    /**
     * Make cloning private so that object cannot be cloned
     */
    private function __clone()
    {}

    /**
     * Singleton to ensure only one Config object is used
     *
     * @return object|\system\engine\Config
     */
    public static function getInstance()
    {
        try {
            if (self::$instance == null) {
                self::$instance = new Config();
            } else {
                $config = new Config();
            }
            return self::$instance;
        } catch (\Exception $e) {
            error_log($e, 0);
        }
    }

    /**
     * Getter
     *
     * @param string $key
     * @return mixed
     */
    public function get($key)
    {
        return (isset($this->$key) ? $this->$key : null);
    }

    /**
     * Setter
     *
     * @param string $key
     * @param string $value
     */
    public function set($key, $value)
    {
        $this->{$key} = $value;
    }
}