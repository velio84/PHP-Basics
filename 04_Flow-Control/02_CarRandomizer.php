<!DOCTYPE html>
<html>
<head>
    <title>Car Randomizer</title>
</head>
<body>
    <form method="get">
        Enter cars:
        <input type="text" name="cars" />
        <input type="submit" value="Show results" />
    </form>
    <br />
    <table border="1">
        <thead>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
        </thead>
        <tbody>
            
        <?php
        $colors = array("red", "yellow", "white", "black", "orange", "green");
        
        if(isset($_GET['cars'])):
            $input = preg_split("/, /", $_GET['cars']);
            foreach ($input as $car):
                $color = array_rand($colors);
                $num = rand(1, 5);
            ?>
            
            <tr>
                <td><?= htmlentities($car) ?></td>
                <td><?= htmlentities($colors[$color]) ?></td>
                <td><?= htmlentities($num) ?></td>
            </tr>
            
            <?php endforeach; ?>
        <?php endif;?>

        </tbody>
    </table>
</body>
</html>