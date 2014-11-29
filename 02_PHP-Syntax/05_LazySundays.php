<?php

$dt = new DateTime();
$start = new DateTime($dt->format('m/01/Y'));
$interval = new DateInterval('P1D');

if($dt->format('n' == 2)) {
    for ($i=1; $i <= 28 ; $i++) { 
    if ($start->format('D') == 'Sun') {
        echo $start->format('jS F, Y') . PHP_EOL;
    }
    $start->add($interval);
    }
} else if ($dt->format('n' == 1) || $dt->format('n' == 3) || $dt->format('n' == 5) || $dt->format('n' == 7) || $dt->format('n' == 8) || $dt->format('n' == 10) || $dt->format('n' == 12)) {
	for ($i=1; $i <= 31 ; $i++) { 
    if ($start->format('D') == 'Sun') {
        echo $start->format('jS F, Y') . PHP_EOL;
    }
    $start->add($interval);
    }
} else {
    for ($i=1; $i <= 30 ; $i++) { 
    if ($start->format('D') == 'Sun') {
        echo $start->format('jS F, Y') . PHP_EOL;
    }
    $start->add($interval);
    }
}

?>