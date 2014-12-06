<!DOCTYPE html>
<html>
<head>
    <title>Square Root Sum</title>
</head>
<body>
    <table>
        <thead>
            <th>Number</th>
            <th>Square</th>
        </thead>
        <tbody>
            <?php
            $sum = 0;
            for ($i=0; $i <= 100; $i += 2):
                $sqRoot = sqrt($i);
                $sum += $sqRoot; 
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= round($sqRoot, 2) ?></td>
            </tr>
            <?php endfor; ?>
        </tbody>
        <tfoot>
            <td>Total:</td>
            <td><?= round($sum, 2) ?></td>
        </tfoot>
    </table>
</body>
</html>

<?php



?>