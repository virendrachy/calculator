<?php
$calculator = new Calculator();
try{
    unset($argv[0]);
    
    $action =array_shift($argv);
  
    if($action == 'add' || $action == 'sum') {
        
       echo $calculator->add($argv);
    
    } else if ($action == 'multiple') {
        
        echo $calculator->multiply($argv);
    
    }else if($action == 'subtract'){
       
       echo $calculator->subtract($argv[0],$argv[1]);
    
    } else if($action == 'divide'){
 
        echo $calculator->divide($argv[0],$argv[1]);
       
    }
}catch(Exception $e){
            echo $e->getMessage();
        }    
?>
