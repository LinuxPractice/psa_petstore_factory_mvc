<?php
namespace system\engine;

/**
 *
 * @author Bill
 *        
 */
abstract class AbstractController
{

    /*
     * Constructor
     */
    protected function __construct()
    {}

    /**
     * Ensure all controllers have an index method
     */
    public function index()
    {}

    /**
     * Destructor
     */
    protected function __destruct()
    {}
}