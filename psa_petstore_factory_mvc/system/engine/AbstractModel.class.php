<?php
namespace system\engine;

use system\db\DatabaseMysqli;

/**
 *
 * @author Bill
 *        
 */
abstract class AbstractModel
{

    /**
     * Placeholder for database object
     *
     * @var object
     */
    protected $db;

    /**
     * Constructor
     *
     * Instantiate the database connector for all controllers
     */
    protected function __construct()
    {
        $this->db = DatabaseMysqli::getInstance();
    }

    /**
     * Destructor
     */
    public function __destruct()
    {}
}