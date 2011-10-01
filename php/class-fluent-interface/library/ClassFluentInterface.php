<?php
/*
 * @package         <packagename>
 * @author          <authorname> 
 * @copyright       Copyright (C) <year> <copyright>
 * @license         <licensetype>. See license.txt
 * @version         <version>
 * 
 * @note            Initial template based on https://github.com/fititnt/template via @fititnt
 */

class ClassFluentInterface {
    
    /**
     * @var     mixed       Generic mixed variable description
     */
    private $variable;
    
    /**
     * @var     mixed       Generic mixed variable description
     */
    public $public;
    
    /**
     * @var     integer     Generic integer variable description
     */
    private $integer;
    
    /**
     * @var     string       Generic string variable description
     */
    private $string;
    
    /**
     * @var     array       Generic array variable description
     */
    private $array;

    /*
     * Initialize values
     */
   function __construct()
    {
       $this->public = '__construct() started value of $public var';
    }
    
   function __destruct() {
       print "\nClassFluentInterface called __destruct()\n";
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
     * Set to $variable the desired value
     * 
     * @var        mixed          $name: name of var to set
     *
     * return       object          $this
     */
    public function setVariable( $value )
    {
        $this->variable = $value;
        return $this;
    }
    
    /*
     * Get $variable desired value
     * 
     * @var        mixed          $name: name of var to return
     *
     * return       object          $this->$variable
     */
    public function getVariable( )
    {
        return $this->variable;
    }
    
    /*
     * Example of private method.
     * Will call one private method
     *
     * @var       <vartype>        <vardescription>
     * 
     * @return       <returntype>        <returndescription>
     */
    public function doPublicMethod( $variable )
    {
        $result  = 'doPublicMethod is asking ...';
        $result .= $this->_doPrivateMethod( $variable );
        return $result;
    }
    
    /*
     * Example of private method. Its a good pratice start with _ (undescore)
     *
     * @var       <vartype>        <vardescription>
     * 
     * @return       <returntype>        <returndescription>
     */
    private function _doPrivateMethod( $variable )
    {
        $result  = '_doPrivateMethod for a ';
        $result .= $variable;
        return $result;
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