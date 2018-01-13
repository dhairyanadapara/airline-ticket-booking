<?php

try {
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=ce080', 'root', 'dpn26011998');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo("Hello World");
    $sql1 = "select username,password from myprojectdb";
    
    $query = $dbhandler->query($sql1);
       while($r=$query->fetch()){
        session_start();
        if (isset($_POST['uname']) && isset($_POST['pwd'])) {
            /*if ($_POST['vercode1'] != $_SESSION['vercode'] OR $_SESSION['vercode'] == '') {
                header("location:login.php?msg=Verification Captcha error!");
            } */
            if (($_POST['uname'] == $r['username'] && $_POST['pwd'] == $r['password'])) {
                $_SESSION['uname'] = $_POST['uname'];
                header("location:deskmenu.php");
            } 
            else {
                header("location:login.php?msg=INVALID LOGIN DETAILS");
            }
        } 
        else {
            header("location:login.php?msg=Please fill all required details.");
        }
        
    }
    echo 'sucessfully checked';

    
}

catch (PDOException $e) {
    die();
    echo $e->getMessage();
}
?>
