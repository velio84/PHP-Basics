<!DOCTYPE html>
<head>
    <title>Get Form Data</title>
    <link rel="stylesheet" href="07_styles.css" />
</head>
<body>
    <div id="wrapper">
        <form action="" method="get">
            <input type="text" name="name" placeholder="Name" class="info" />
            <input type="number" name="age" placeholder="Age" class="info" />
            <div>
                <input type="radio" id="genderMale" name="gender" value="Male" />
                <label for="genderMale">Male</label>
            </div>
            <div>
                <input type="radio" id="genderFemale" name="gender" value="Female" />
                <label for="genderFemale">Female</label>
            </div>
            <div id="button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

<?php if(isset($_GET["name"])):
    $name = $_GET["name"];
    $age = $_GET["age"];
    $gender = $_GET["gender"];
?>

    <p>My name is <?= htmlspecialchars($name) ?>. I am <?= htmlspecialchars($age) ?> years old. I am <?= htmlspecialchars($gender)?>.</p>
    
<?php endif; ?>