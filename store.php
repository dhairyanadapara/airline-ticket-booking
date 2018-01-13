<?php

$upat = "/[A-Za-z0-9@_]{8,20}/";
$ppat = "/[A-Za-z0-9@_]{8}/";
$epat = "/[A-Za-z0-9\.@_]+[@gmail.com | @yahho.com]/";
$cpat = "/[+91]([0-9]{10})/";
$username = $_POST['uname'];
$password = $_POST['pwd1'];
$email = $_POST['email'];
$contactno = $_POST['contact'];
$age = $_POST['age'];
$gender = $_POST['gender'];

if (!preg_match($upat, $_POST['uname'])) {
    header("location:registration.php?msg=PLEASE ENTER PROPER USERNAME!");
} else if (!preg_match($ppat, $_POST['pwd1'])) {
    header("location:registration.php?msg=PLEASE ENTER PROPER PASSWORD!");
} else if ($_POST['pwd1'] != $_POST['pwd2']) {
    header("location:registration.php?msg=PASSWORD AND CONFIRM PASSWORD NOT SAME!");
} else if (!preg_match($epat, $_POST['email'])) {
    header("location:registration.php?msg=PLEASE ENTER VALID EMAIL ADDRESS !");
} else if (!preg_match($cpat, $_POST['contact'])) {
    header("location:registration.php?msg=PLEASE ENTER PROPER INDIAN CONTACT NUMBER!");
} else if (!isset($_POST['age']) && $_POST['age'] > 0 && $_POST['age'] < 80) {
    header("location:registration.php?msg=PLEASE ENTER PROPER AGE!");
} else if (!isset($_POST['gender'])) {
    header("location:registration.php?msg=PLEASE ENTER GENDER!");
} else {
    //code for store data in DataBase 
    try {
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=c080', 'root', 'dpn26011998');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "insert into myprojectdb(username,password,email,contactno,age,gender) values('$username','$password','$email','$contactno','$age','$gender')";
        $query = $dbhandler->query($sql);
        echo 'YOU ARE REGISTERED!';
    } catch (PDOException $e) {
        die();
        echo $e->getMessage();
    }
}
?>
