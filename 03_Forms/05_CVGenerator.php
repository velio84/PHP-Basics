<?php
function validateInput() {
    $nameAndLangRegEx = "/^[A-z]{2,20}$/";
    $companyRegEx = "/^[A-z0-9]{2,20}$/";
    $phoneRegEx = "/^[\+]*[\d- ]+$/";
    $emailRegEx = "/^[A-z0-9]+@[A-z0-9]+.[A-z]+$/";
    
    if(!preg_match($nameAndLangRegEx, $_POST['firstName'])) {
        die ("Invalid First Name");
    }
    if(!preg_match($nameAndLangRegEx, $_POST['lastName'])) {
        die ("Invalid Last Name");
    }
    if(!preg_match($companyRegEx, $_POST['company'])) {
        die ("Invalid Company Name");
    }
    if(!preg_match($phoneRegEx, $_POST['phone'])) {
        die ("Invalid Phone Number");
    }
    if(!preg_match($emailRegEx, $_POST['email'])) {
        die ("Invalid Email");
    }
    
    /*
     * 
    can't make this validation work -> the whole thing just stalls. If you can fix it, please let me know how  :)
     * 
    foreach ($_POST['langLevels'] as $key => $value) {
        if(!preg_match($nameAndLangRegEx, $value)) {
        die ("Invalid Language");
    }
     * 
    */
}
validateInput();

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birthDate'];
    $nationality = $_POST['nationality'];
    
    $company = $_POST['company'];
    $dateFrom = $_POST['from'];
    $dateTo = $_POST['to'];
    
    $progLangs = $_POST['compLangs'];
    $progLangsLevels = $_POST['compLangLevels'];
    
    $langs = $_POST['langLevels'];
    $langsComprehensions = $_POST['langComprehensions'];
    $langsReadings = $_POST['langReadings'];
    $langsWritings = $_POST['langWritings'];
    $driverLicense = $_POST['drvLicense'];
        
?>

<table border="2">
    <thead>
        <th colspan='2'>
             Personal Information
        </th>
    </thead>
    <tbody>
        <tr>
            <td>
                First Name
            </td>
            <td>
                <?= htmlentities($firstName) ?>
            </td>
        </tr>
        <tr>
            <td>
                Last Name
            </td>
            <td>
                <?= htmlentities($lastName) ?>
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                <?= htmlentities($email) ?>
            </td>
        </tr>
        <tr>
            <td>
                Phone Number
            </td>
            <td>
                <?= htmlentities($phone)?>
            </td>
        </tr>
        <tr>
            <td>
                Gender
            </td>
            <td>
                <?= htmlentities($gender) ?>
            </td>
        </tr>
        <tr>
            <td>
                Birth Date
            </td>
            <td>
                <?= htmlentities($birthDate) ?>
            </td>
        </tr>
        <tr>
            <td>
                Nationality
            </td>
            <td>
                <?= htmlentities($nationality) ?>
            </td>
        </tr>
    </tbody>
</table>
<br />

<table border="2">
    <thead>
        <th colspan="2">Last Work Position</th>
    </thead>
    <tbody>
        <tr>
            <td>Company Name</td>
             <td><?= htmlentities($company) ?></td>
        </tr>
        <tr>
            <td>From</td>
             <td><?= htmlentities($dateFrom) ?></td>
        </tr>
        <tr>
            <td>To</td>
             <td><?= htmlentities($dateTo) ?></td>
        </tr>
    </tbody>
</table>
<br/>

<table border="2">
    <thead>
        <th colspan="2">Computer Skills</th>
    </thead>
    <tbody>
        <tr>
            <td>Programming Languages</td>
            <td>
                <table border="2">
                    <thead>
                        <th>Language</th>
                        <th>Skill Level</th>
                    </thead>
                    <tbody>
                        <?php
                        for($i=0; $i<count($progLangs); $i++):
                        ?>
                        <tr>
                            <td><?= htmlentities($progLangs[$i]) ?></td>
                            <td><?= htmlentities($progLangsLevels[$i]) ?></td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<br />

<table border="2">
    <thead>
        <th colspan="2">Other skills</th>
    </thead>
    <tbody>
        <tr>
            <td>Languages</td>
            <td>
                <table border='2'>
                    <thead>
                        <th>Language</th>
                        <th>Comprehension</th>
                        <th>Reading</th>
                        <th>Writing</th>
                    </thead>
                    <tbody>
                        <?php for($i = 0; $i < count($langs); $i++): ?>
                        <tr>
                            <td><?= htmlentities($langs[$i]) ?></td>
                            <td><?= htmlentities($langsComprehensions[$i]) ?></td>
                            <td><?= htmlentities($langsReadings[$i]) ?></td>
                            <td><?= htmlentities($langsWritings[$i]) ?></td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>Driver's license</td>
            <td>
                <?= htmlentities(join(', ', $driverLicense)); ?>
            </td>
        </tr>
    </tbody>
</table>
