<!DOCTYPE html>
<html>
    <head>
        <title>PAYMENT</title>
    </head>
    <script>
        alert('Please Do not close page while payment process is running!');
    </script>
    <body bgcolor='GRAY'>
        <form action='last.php'>
            <table>
                <?php
                session_start();
                if (!isset($_SESSION['uname'])) {
                    header("location:login.php?msg=LOGIN HERE TO VIEW YOUR HOME SCREEN!");
                }
                if ($_POST['payment'] == 'COD') {
                    echo ' Selected option:Cash On Delivery';
                    echo $_SESSION['name'] . '<br/>';
                    echo 'Delivery to:<br />';
                    echo $_SESSION['address'] . '<br />';
                    echo $_SESSION['city'] . '-' . $_SESSION['pin'] . '<br />';
                    echo 'GUJARAT';
                    echo '<br /><br />Astimate time:After 10-15 days to current day<br />';
                    echo 'Remembering you that Today\'s date is(dd/mm/yyyy):' . date('d') . '/' . date('m') . '/' . date('y');
                }
                ?>
            </table>
            <input type='submit' value="OK"/>
        </form>
    </body>
</html>
