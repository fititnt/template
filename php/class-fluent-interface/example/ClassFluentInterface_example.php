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

include_once '../library/ClassFluentInterface.php';

echo '<html><head></head><body><pre>';

$cfi = new ClassFluentInterface(); //Create new object based on ClassFluentInterface
$cfi->debug();//Like print_r($this) result. Fist call before create object

$cfi->setVariable('Example Var')
        ->set('integer', 13)
        ->set('string', 'string var')
        ->set('array', array('a'=> 1, 'b' => 3))
        ->debug()
        ;
//Or in just one line
//$cli->setVariable('Example Var')->set('integer', 13)->set('string', 'string var')->set('array', array('a'=> 1, 'b' => 3))->debug();

echo $cfi->getVariable(); //Example Var
echo "\n";

echo $cfi->get('variable'); //Example Var
echo "\n";

$cfi->del('variable'); //Example Var
var_dump( $cfi->get('variable') ) ; //NULL


//One way to destruct object is set it to NULL
//$cfi = NULL; //ClassFluentInterface called __destruct()

//Another way to destruct object is just create a new in sabe variable
$cfi = new ClassFluentInterface(); //Create new object based on ClassFluentInterface

echo $cfi->doPublicMethod('hello!'); //doPublicMethod is asking ..._doPrivateMethod for a hello!

echo '</pre></body></html>';