<?php

/**
 *
 * @author Bill
 *        
 */
class autoLoader
{

    /**
     * Constructor
     */
    public function __construct()
    {
        
        /* auto loader */
        spl_autoload_register(function ($class) {
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.class.php';
            $file = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.class.php';
            if (file_exists($file)) {
                include $file;
            }
        });
        /* end auto loader */
    }

    /**
     * Destructor
     */
    function __destruct()
    {
        
        // TODO - Insert your code here
    }
}

