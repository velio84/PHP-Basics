<?php
$name = 'Gosho';
$phone = "0882-321-213";
$age = 24;
$addr = "Hadji Dimitar";
?>

<!DOCTYPE html>
<head>
    <title>Info Table</title>
    <link rel="stylesheet" href="06_styles.css" />
</head>
<body>
    <div id='wrapper'>
    <table>
        <tr>
            <td>Name</td>
            <td>
                <?= $name ?>
            </td>
        </tr>
        
        <tr>
            <td>Phone number</td>
            <td>
                <?= $phone ?>
            </td>
        </tr>
        
        <tr>
            <td>Age</td>
            <td>
                <?= $age ?>
            </td>
        </tr>
        
        <tr>
            <td>Address</td>
            <td>
                <?= $addr ?>
            </td>
        </tr>
    </table>
</div>
</body>


