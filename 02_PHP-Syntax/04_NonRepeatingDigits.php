<?php

$n = 1234;
nonRepDigits($n);

$n = 145;
nonRepDigits($n);

$n = 15;
nonRepDigits($n);

$n = 247;
nonRepDigits($n);

function nonRepDigits($input) {
    if ($input < 100) {
        echo "no";
    } else {
        $maxNum = $input;
        if($maxNum > 999)
            $maxNum = 999;
        
        $output = [];
        
        for ($i=100; $i <= $maxNum; $i++) { 
            $a = floor($i / 100);
            $b = $i / 10 % 10;
            $c = $i % 10;
            
            if ($a != $b && $b != $c && $a != $c) {
                 array_push($output, "$a$b$c");
            }
        }
        
        echo implode(", ", $output);
        
    }
    
    echo PHP_EOL;
}

?>