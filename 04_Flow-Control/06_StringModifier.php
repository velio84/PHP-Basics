<?php
include '06_StringModifier.html';

function palindrome($str) {
    $strToCompare = strrev($str);
    $output = strcmp($str, $strToCompare);
    if ($output == 0) {
        return "$str is a palindrome!";
    }
    else {
        return "$str is not a palindrome";
    }
}

function reverse($str) {
    return htmlentities(strrev($str));    
}

function splitLetters($str) {
    $splitStr = str_split(preg_replace("/[^A-Za-z]/", "", $str));
            
    return htmlentities(implode(" ", $splitStr));
}

function hashArr($str) {
    return htmlentities(crypt($str));
}

function shuffleArr($str) {
    return htmlentities(str_shuffle($str));
}

if(isset($_GET['input'])):
    $input = $_GET['input'];
    $case = $_GET['action'];
    $output = '';
    
    switch ($case) {
        case 'palindrome':
            $output = palindrome($input);
            break;
            
        case 'reverse':
            $output = reverse($input);
            break;
            
        case 'split':
            $output = splitLetters($input);
            break;
            
        case 'hash':
            $output = hashArr($input);
            break;
            
        case 'shuffle':
            $output = shuffleArr($input);
            break;
        
        default:
            die ("Select an action");
            break;
    }
?>

<p>
    <?= $output ?>
</p>

<?php endif; ?>