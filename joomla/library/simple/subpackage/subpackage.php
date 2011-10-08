<?php

/*
 * @package         {packagename}
 * @subpackage      {subpackage}
 * @author          {authorname}
 * @version         {version}
 * @copyright       {copyright}
 * @license         {license}
 * 
 * @note            Startup based on https://github.com/fititnt/template
 */
defined('JPATH_PLATFORM') or die('Restricted access');

/*
 * Fluent interface class
 * More info about this class can be read on Class Fluent Interface template
 * 
 * @see http://en.wikipedia.org/wiki/Fluent_interface
 * @see https://github.com/fititnt/template/tree/master/php/class-fluent-interface
 * 
 */
class LibexampleSubpackage
{
    
    
    /**
     * @var     mixed       Generic mixed variable description
     */
    private $variable;
    
    /**
     * @var     mixed       Generic mixed variable description
     */
    public $public;
    

    /*
     * Initialize values
     */
   function __construct()
    {
       //
    }

    /*
     * Delete (set to NULL) generic variable
     * 
     * @var        string          $name: name of var to return
     *
     * return       object          $this
     */
    public function del( $name )
    {
        $this->$name = NULL;
        return $this;
    }
    
    /*
     * Return generic variable
     * 
     * @var        string          $name: name of var to return
     *
     * return       mixed          $this->$name: value of var
     */
    public function get( $name )
    {
        return $this->$name;
    }
    
    /*
     * Set one generic variable the desired value
     * 
     * @var        string          $name: name of var to return
     *
     * return       object          $this
     */
    public function set( $name, $value )
    {
        $this->$name = $value;
        return $this;
    }
    
    
    /*
     * Function to debug $this object
     *
     * @var       string        $method: print_r or, var_dump
     * 
     * @var       boolean       $format: true for print <pre> tags. Default false
     * 
     * @return       void
     */
    public function debug( $method = 'print_r', $format = FALSE )
    {
        if ($format){
            echo '<pre>';
        }
        if ($method === 'print_r'){
            print_r( $this );
        } else {
            var_dump( $this );
        }
        if ( $format ){
            echo '</pre>';
        }
    }
    
}

