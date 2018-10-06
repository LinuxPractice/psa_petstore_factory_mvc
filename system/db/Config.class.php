<?php
namespace system\db;

/**
 * Configuration object to hold database connection parameters
 * @author Bill
 *        
 */
class Config
{

    /* Configuration connection details */
    /* Modify these as needed */
    /**
     * Location of database server
     *
     * @var string
     */
    protected const DB_SERVER = 'localhost';

    /**
     * Name of database
     *
     * @var string
     */
    protected const DB_DATABASE= 'petstore_db01';

    /**
     * Database user
     *
     * @var string
     */
    protected const DB_USER = 'petstoreuser';

    /**
     * Database password
     *
     * @var string
     */
    protected const DB_PASS = 'petstorepassword';    

}
