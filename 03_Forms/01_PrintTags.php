<!DOCTYPE html>
<head>
    <title>Print Tags</title>
</head>
<body>
    <form method="get">
        <fieldset>
            Enter Tags: <br />
            <input type="text" name="input" />
            <input type="submit" value="Submit" />
            
            <?php
        
            if (isset($_GET['input'])){ 
                $input = preg_split("/, /", $_GET['input']);
            }
            
            foreach ($input as $key => $value): ?>
            
            <p>
                <?= htmlspecialchars($key)?> : <?= htmlspecialchars($value)?>
            </p>
            
            <?php endforeach; ?>
            
        </fieldset>
    </form>
</body>