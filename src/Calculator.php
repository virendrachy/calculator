<?php
class Calculator {

    private $_val1 , $_val2;
    public function add($val):int{
        $result = 0;
        foreach($val as $value){
        $result += $value;
        }
        return $result;
    }
    public function subtract($val1,$val2):int{
   
        return $val1 - $val2;
    }
    public function multiply ($val):int{
   
        $result = 1;
        foreach($val as $value){
        $result *= $value;
        }
        return $result;
    }
    public function divide ($val1,$val2) {
        if($val2==0){
         
         throw new Exception('Error: Division by zero.');
         
        }
        return $val1 / $val2;
    }
}

?>
