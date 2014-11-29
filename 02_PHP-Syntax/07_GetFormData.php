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
    $name = htmlspecialchars($_GET["name"]);
    $age = htmlspecialchars($_GET["age"]);
    $gender = htmlspecialchars($_GET["gender"]);
?>

    <p>My name is <?= $name ?>. I am <?= $age ?> years old. I am <?= $gender?>.</p>
    
<?php endif; ?>