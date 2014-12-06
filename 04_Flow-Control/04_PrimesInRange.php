<!DOCTYPE html>
<html>
<head>
    <title>Primes In Range</title>
</head>
<body>
    <form method="get">
        Starting Index:
        <input name="start" type="text" />
        End:
        <input name="end" type="text" />
        <input type="submit" />
    </form>
    
<?php

function primeChecker($n) {
    $isPrime = true;
    if ($n == 1) {
        return "<strong>".$n."</strong>";
    }
    else {
        for ($i=2; $i <= sqrt($n); $i++) { 
            if ($n % $i == 0) {
                return $n;
            }
        }
    }
    return "<strong>".$n."</strong>";
}

if(isset($_GET['start'], $_GET['end'])):
    $start = $_GET['start'];
    $end = $_GET['end'];
    $numValidation = is_numeric($start) && is_numeric($end);
    $endIndexValidation = $end > $start && $start > 0;
    if (!$numValidation) {
        die ("Enter numbers.");
    }
    if (!$endIndexValidation) {
        die ("Start index must be > 0 and end index must be greater than the start index.");
    }
    ?>
    
    <p>
        <?= primeChecker($start)?><?php
        for ($i=$start + 1; $i <= $end; $i++) { 
            echo ", " . primeChecker($i);
        }
        ?>
    </p>
        
    <?php endif; ?> 
   
</body>
</html>