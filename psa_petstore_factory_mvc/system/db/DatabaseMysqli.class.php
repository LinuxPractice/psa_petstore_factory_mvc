<?php
namespace system\db;

/**
 *
 * @author Bill
 * @todo - Implement parameterized queries
 */
final class DatabaseMysqli extends Config
{

    /**
     * Class instance
     *
     * @var object
     */
    private static $instance = null;

    /**
     * Singleton to prevent multiple db connections
     *
     * @param object $config
     * @throws \Exception
     */
    private function __construct()
    {
        try {
            $this->connection = new \mysqli(self::DB_SERVER, self::DB_USER, self::DB_PASS, self::DB_DATABASE);
            if ($this->connection->connect_error) {
                throw new \Exception("PHP-MYSQL Error:  " . $this->connection->connect_error);
            }
        } catch (\Exception $e) {
            error_log($e, 0);
        }
    }

    /**
     * Return the active instance of the databse connection
     *
     * @param object $config
     * @throws \Exception
     * @return object
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new DatabaseMysqli();
        }
        
        return self::$instance;
    }

    /**
     * Execute a query
     *
     * @param string $query
     */
    public function execQuery(string $query)
    {
        $rs = $this->connection->query($query);
    }

    /**
     * Get results from query
     *
     * @param string $query
     * @throws \Exception
     * @return array
     */
    public function getResults(string $query): array
    {
        // echo $query;
        try {
            /* @TODO - make thois use the execQuery method */
            $rs = $this->connection->query($query);
            if ($this->connection->error) {
                throw new \Exception("PHP-MYSQL Error:  Could not execute Query:  query was $query");
            } else {
                $i = 0;
                while ($row = $rs->fetch_object()) {
                    $results['data'][] = $row;
                    $i ++;
                }
                if (strstr($query, 'SQL_CALC_FOUND_ROWS')) {
                    $results['num_rows'] = $rs->num_rows;
                }
                $rs->free_result();
                return $results;
            }
        } catch (\Exception $e) {
            $em = "PHP-MYSQL Error: " . $this->connection->errno . " - " . $this->connection->error;
            error_log($e, 0);
            error_log($em, 0);
            return Array();
        }
    }

    /**
     * Destructor
     */
    function __destruct()
    {}
}

