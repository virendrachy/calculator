<?php
require 'src/Calculator.php';
 
class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;
     
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
       
        $array = array(3,2);
        $result = $this->calculator->add($array);
        $this->assertEquals(5, $result);
    }
     public function testSubtract()
    {
      
        $result1 = $this->calculator->subtract(3,2);
        $this->assertEquals(1, $result1);
    }
       public function testMultiply()
    {
        $array = array(4,2);
        $result = $this->calculator->multiply($array);
        $this->assertEquals(8, $result);
    }
     public function testDivide()
    {
        
        $result = $this->calculator->divide(4,2);
        $this->assertEquals(2, $result);
    }
 
}
