<?php
	session_start();
?>
   <html>
    <head>
        <link rel="stylesheet" href="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.css">
        <script defer src="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.js"></script> 
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
                include 'headerlo.php';
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
            <img src="787dreamliner2.jpg" width="1366"  id="dreamlogin" />
        </td>
    </tr>
</table>        
    <table>
                <tr>
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == 'YOU ARE SUCESSFULLY LOGGED OUT!') {
                            if (isset($_SESSION['uname'])) {
                                session_destroy();
								}
                        }
                        echo "<script>alert('" . $_GET['msg'] . "')</script>";
                        echo "<td><h5><font color='white'>" . $_GET['msg'] . "</font></h5></td>";
                    } else {
                        
                        echo "<td><h3><center>GOING PLACES TOGETHER!!!!</center></h3></td>";
                    }
                    ?>
                </tr>
            </table> 
            <div class="form">   
            <form action="schedule.php" method="post">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="uname" id="sample3">
                    <label class="mdl-textfield__label" for="sample3">Username...</label>
                </div><br/>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="email" id="sample3">
                    <label class="mdl-textfield__label" for="sample3">Email...</label>
                </div><br/>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="age" id="sample3">
                    <label class="mdl-textfield__label" for="sample3">Age...</label>
                </div><br/>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="contact" id="sample3">
                    <label class="mdl-textfield__label" for="sample3">Contact...</label>
                </div><br/>
                
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
                    <select class="mdl-textfield__input" type="text" name="from" id="sample2" readonly tabIndex="-1">
                        <option class="mdl-menu__item" value="BOM">BOM</option>
                        <option class="mdl-menu__item" value="DEL">DEL</option>
                        <option class="mdl-menu__item" value="AMD">AMD</option>
                    </select>
                </div><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
                    <select class="mdl-textfield__input" type="text" name="to" id="sample2" readonly tabIndex="-1"> 
                        <option class="mdl-menu__item" value="BOM">BOM</option>
                        <option class="mdl-menu__item" value="DEL">DEL</option>
                        <option class="mdl-menu__item" value="AMD">AMD</option>
                    
                    </select>
                </div><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
                    <select class="mdl-textfield__input" type="text" name="to" id="sample2" readonly tabIndex="-1"> 
                        <option class="mdl-menu__item" value="Economy">Economy</option>
                        <option class="mdl-menu__item" value="Business">Business</option>
                    </select>
                </div><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
                    <select class="mdl-textfield__input" type="text"  name="member" value="1" id="sample2" readonly tabIndex="-1"> 
                        <option class="mdl-menu__item" value="1">1</option>
                        <option class="mdl-menu__item" value="2">2</option>
                        <option class="mdl-menu__item" value="3">3</option>
                        <option class="mdl-menu__item" value="4">4</option>
                        <option class="mdl-menu__item" value="5">5</option>
                        <option class="mdl-menu__item" value="6">6</option>
                        <option class="mdl-menu__item" value="7">7</option>
                        <option class="mdl-menu__item" value="8">8</option>
                        <option class="mdl-menu__item" value="9">9</option>
                    </select>
                </div><br>
                <input type="submit" value="Book" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" title="Click here to login!"/>
                <input type="reset" value="Reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" title="Click here to reset details!"/>   
        </form>
        </div>
    </body>    
</html>