<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../patient-test/dist/scss/main.css">
    <title>Document</title>
</head>
<body>
    <div class="patient__info__display">
        <div class="patient__info__container">
            <div class="patient__info__wrapper">
                <div class="personal__info divider">
                    <h1>Personal Information</h1>
                    <div class="info">
                        <p><?php  
                            $firstname = $_SESSION['firstnamedisplay'];
                            $middlename = $_SESSION['middlesnamedisplay'];
                            $lastname = $_SESSION['lastnamedisplay'];
                            echo $firstname." ".$middlename." ".$lastname; ?>
                        </p>
                        <p> <?php $datebirth = $_SESSION['datebirthdisplay']; echo $datebirth; ?></p>
                        <p><?php $age = $_SESSION['agedisplay']; echo $age; ?></p>
                        <p><?php $gender = $_SESSION['lastnamedisplay']; echo $gender; ?></p>
                        <p><?php $bloodtype = $_SESSION['bloodtypedisplay']; echo $bloodtype; ?></p>
                        <p><?php $nationality= $_SESSION['nationalitydisplay']; echo $nationality; ?></p>
                        <p><?php $email_address = $_SESSION['emailadddisplay']; echo $email_address; ?></p>
                        <p><?php $address = $_SESSION['addressdisplay']; echo $address; ?></p>
                        <p><?php $contact_no = $_SESSION['contact_nodisplay']; echo $contact_no; ?></p>
                    </div>
                </div>
                <div class="emer__contact divider">
                    <h1>Emergency Contact</h1>
                    <div class="info">
                        <h3>First Contact</h3>
                        <p><?php $emerfullname1 = $_SESSION['emerfullname1display']; echo $emerfullname1; ?></p>
                        <p><?php $relationship1= $_SESSION['relationship1display']; echo $relationship1; ?></p>
                        <p><?php $emercontact1 = $_SESSION['emercontact1display']; echo $emercontact1; ?></p>
                        <h3>Second Contact</h3>
                        <p><?php $emercontact2 = $_SESSION['emerfullname2display']; echo $emercontact2; ?></p>
                        <p><?php $relationship2 = $_SESSION['relationship2display'] ; echo $relationship2; ?></p>
                        <p><?php $emercontact2 = $_SESSION['emercontact2display']; echo $emercontact2; ?></p>
                    </div>
                </div>
                <div class="health__info divider">
                    <h1>Health Information</h3>
                    <div class="info">
                        <h3>Known Medical Condition</h3>
                        <p><?php $knownmedcondi = $_SESSION['knowncondidisplay']; echo $knownmedcondi; ?></p>
                        <h3>Allergies</h3>
                        <p><?php $allergies = $_SESSION['allergiesdisplay']; echo $allergies; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>