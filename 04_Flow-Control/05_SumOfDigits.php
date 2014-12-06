<!DOCTYPE html>
<html>
<head>
    <title>Sum Of Digits</title>
</head>
<body>
    <form method="get">
        Input string:
        <input name="nums" type="text" />
        <input type="submit" />
    </form>
    
    <table border="1">
            
    <?php
    
    function sum($n) {
        if (!is_numeric($n)) {
            return "I cannot sum that";
        }
        else {
            $numArray = str_split($n);
            return htmlentities(array_sum($numArray));
        }
    }
    
    if(isset($_GET['nums'])):
        $input = preg_split("/, /", $_GET['nums']);
        foreach ($input as $num):
    ?>
            <tr>
                <td><?= htmlentities($num) ?></td>
                <td><?= sum($num) ?></td>
            </tr>
      
    <?php 
        endforeach; 
    endif; 
    ?>

    </table>
</body>
</html>