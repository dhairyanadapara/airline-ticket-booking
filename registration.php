<html>
    <head>
        <title>SignUp page</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <style type="text/css">
        body{

        }
        .form{
            text-align: center;
            border: thick;
            border-color: #ffffff;
        }
        </style>
    </head>
    <body>
        <table>
    <tr>
        <td>
            <header>
            <?php
                include 'header.php';
                for ($i=0; $i <20 ; $i++) { 
                    echo "<tr></tr>";
                }
            ?>
            </header>
        </td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>


            <?php
            if (isset($_GET['msg'])) {
                if ($_GET['msg'] == 'YOU ARE SUCESSFULLY LOGGED OUT!') {
                    if (isset($_SESSION['uname'])) {
                        session_destroy();
                        }
                    }
                    echo "<script>alert('" . $_GET['msg'] . "')</script>";
                    echo "<td><h5><font color='white'>" . $_GET['msg'] . "</font></h5></td>";
                } 
                else {
                  echo "<td><h3>GOING PLACES TOGETHER!!!!</h3></td>";
                }
            ?>
            </tr>
  </table>  
<table>
    <tr>
        <td>
            <img src="787dreamliner1.jpg" width="1366"  class="dreamlogin" />
        </td>
    </tr>
    </table>
        <div class="form">
                    <form action="store.php" method="POST">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="uname" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Username...</label>
                        </div><br/>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" name="pwd1" id="password">
                            <label class="mdl-textfield__label" for="sample3">Password...</label>
                        </div><br/>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" name="pwd2" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Re Enter Password...</label>
                        </div><br/>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="email" name="email" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Email...</label>
                        </div><br/>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="contact" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Contact...</label>
                        </div><br/>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="number" name="age" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Age...</label>
                        </div><br/>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                            <input type="radio" id="option-1" class="mdl-radio__button" name="gender" value="Male" checked>
                            <span class="mdl-radio__label">Male</span>
                        </label><br/>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                            <input type="radio" id="option-2" class="mdl-radio__button" name="gender" value="Female">
                            <span class="mdl-radio__label">Female</span>
                        </label><br/>
                        <input type="submit" value="Sign Up" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" title="Click here to login!"/>
                        <input type="reset" value="Reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" title="Click here to reset details!"/>
                    </form>
                </div>
            <!--<b><U>NOTES:</U></b><br />
            1)* Required informations<br/>
            2)Password and Confirm Password must match.<br />
            3)Username contains at least 8 characters.(@ _ are allowed)
            <br />
            &nbsp;&nbsp;Ex.Abcdefg@78,Xyuag45,BoPKklop9@8 are allowed.<br />
            4)You will get Updated news or messages via Email and/or Contact numberable.<br />
            5)EmailId must be valid.<br />
            -->

        
        <footer>
        <?php
         include 'footer.php';
        ?>
        </footer>
    </body>
</html>
