<form action="deskmenu.php" method="POST">
    <?php
    if (isset($_GET['msg'])) {
        echo $_GET['msg'];
    }
    ?>
    Enter new Password&nbsp&nbsp&nbsp&nbsp:<input type="password" name="pass1"><br><br>
    Reenter new password:<input type="password" name="pass2"><br><br>
    <input type="submit" value="Confirm">
</form>
<?php
session_start();
if (isset($_POST['pass1']) && isset($_POST['pass2'])) {
    if ($_POST['pass1'] == $_POST['pass2']) {
        try {
            $user=$_SESSION['uname'];
            $pwd=$_POST['pass1'];
            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=ce080', 'root', 'dpn26011998');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "update myprojectdb set password='$pwd' where username='$user'";
            $query = $dbhandler->query($sql);
            header("location:deskmenu.php?msg=PASSWORD SUCESSFULLY CHANGED!");
        } catch (PDOException $e) {
            
            echo $e->getMessage();
            die();
        }
    } else {
        header("location:changepassword.php?msg=PASSWORD NOT SAME!");
    }
}
?>