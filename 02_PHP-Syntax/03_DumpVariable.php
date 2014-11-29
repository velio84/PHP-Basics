<?php

$str = "hello";
checkType($str);

$int = 15;
checkType($int);

$double = 1.234;
checkType($double);

$arr = array(1,2,3);
checkType($arr);

$obj = (object)[2,34];
checkType($obj);

function checkType($input) {
    
    $convertedVar = gettype($input);
    
    if ($convertedVar == 'integer' || $convertedVar == 'float' || $convertedVar == 'double') {
        echo var_dump($input);
    }
    
    else {
        echo $convertedVar;
    }
    
    echo PHP_EOL;
}

?>