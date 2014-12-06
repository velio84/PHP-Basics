<!DOCTYPE html>
<html>
<head>
    <title>Annual Expenses</title>
    <link rel="stylesheet" type="text/css" href="03_Styles.css" />
</head>
<body>
    <form method="get">
        Enter number of years:
        <input name="input" type="number"/>
        <input type="submit" value="Show costs"/>
    </form>
    <br />
    

<?php

function yearExpenses($y) {
    $output = "";
    
    for ($j=2014; $j >= 2014 - $y; $j--) {
        $expenses = 0;
        if ($j % 2 == 0) {
             $output .= "<tr class='evenYear'><td>" . $j . "</td>";
        } 
        else {
            $output .= "<tr class='oddYear'><td>" . $j . "</td>";
        }
        
        for ($i=1; $i <= 12; $i++) {
            $monthExpense = rand(0, 999);
            $expenses += $monthExpense;
            $output .= "<td>" . $monthExpense ."</td>";
        }
        $output .="<td>".$expenses."<?td></tr>";
    }
    return $output;
}

if(isset($_GET['input'])):
    $years = $_GET['input'];
?>

<table>
    <thead>
        <th>Year</th>
        <th>Jan</th>
        <th>Feb</th>
        <th>Mar</th>
        <th>Apr</th>
        <th>May</th>
        <th>Jun</th>
        <th>Jul</th>
        <th>Aug</th>
        <th>Sep</th>
        <th>Oct</th>
        <th>Nov</th>
        <th>Dec</th>
        <th>Total:</th>
    </thead>
    <tbody>
        <?= yearExpenses($years) ?>
    </tbody>
</table>

<?php endif; ?>
</body>
</html>
