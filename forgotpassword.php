<html>
    <head>
        <title>Password Recovery</title>
    </head>
    <body bgcolor="66CC99">
        <form action="forgotpassword.php">
            <table>
                <tr>
                    <td>Enter Username:</td>
                    <td><input type="text" name="user"/></td>
                </tr>
                <tr>
                    <td>Enter Registered Email:</td>
                    <td><input type="text" name="email"/></td>
                </tr>
                <tr>
                    <td>Enter Registered Contact number:</td>
                    <td><input type="text" name='contact' value="+91"/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"/>
                        <input type="reset" value="Reset"/></td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_GET['user']) && isset($_GET['email']) && isset($_GET['contact'])){
        $user = $_GET['user'];
        $email = $_GET['email'];
        $contact = $_GET['contact'];
        try {
            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=ce080','root','dpn26011998');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "select password from myprojectdb where username='$user'AND email='$email' AND contactno='$contact'";
            $query = $dbhandler->query($sql);
            while ($r = $query->fetch()) {
                echo "YOUR PASSWORD IS:<font color='RED' size='8'>" . $r['password'].'</font>';
            }
        } catch (PDOException $e) {
            die();
            $e->getMessage();
        }
        }else{
        }
        ?>
    </body>
</html>
