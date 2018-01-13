<html>
    <head>
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
    
        <meta charset="UTF-8">
        <title>TICKET RESERVATION SYSTEM</title>
        <list type="stylesheet" src="project.css"/>
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
                        
                        echo "<td><h3><font color='purple'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-------GOING PLACES TOGETHER!!!!-------</font></h3></td>";
                    }
                    ?>
                </tr>
        </table>
        <ul class="mdl-list--selectable">
            <li class="mdl-list__item">
            <span class="mdl-list">
                <a href="flightchart.php">Schedule</a>
                </span>
              </li>
              <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">
                  <a href="ticketbook.php">Ticket Booking</a>
                </span>
              </li>
              <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">
                  <a href="changepassword.php">Change Password</a>
                </span>
              </li>
            </ul>

        <!--<table>
            <tr><li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">
                  <a href="file5.php">Change Password</a>
                </span>
              </li>
                <td>
                    <h3><a href="file6.php">Schedule</a></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3><a href="ticketbook.php">Ticket Booking</a></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3><a href="file5.php">Change Password</a></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3><a href="login.php">Logout</a></h3>
                </td>
            </tr>
        </table> -->
    </body>
</html>