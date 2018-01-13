<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <title></title>
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
        <form action="ticketbook.php">
             <br />
            <?php
            if (isset($_GET['msg'])) {
                echo "<script>alert('" . $_GET['msg'] . "')</script>";
            } else {
                echo " ";
            }
            ?>
            <table>
                <tr>
                    <tr>
                    <td colspan="0.5" rowspan="1">
                        <font color="BLUE" size="22">
                        <abbr title="This is Online airlines ticket reservation site"><img src="Jet_Airways_Logo.svg.png" height="150" width="500"></abbr>
                        </font>         
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
                        
                        echo "<td><h3><font color='purple'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-------GOING PLACES TOGETHER!!!!-------</font></h3></td>";
                    }
                    ?>
                </tr>
        </table>
        <table>     
                <tr>
                    <td>Name:</td>
                    <td colspan="2">
                        <?php
                        session_start();
                            echo $_SESSION['uname'];
                        ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Email:</td>
                    <td colspan="2"><?php
                        
                            echo $_SESSION['email'];
                        ?></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><?php
                        
                            echo $_SESSION['age'];
                        ?></td>
                </tr>
                <tr>
                    <td>Contact No.:</td>
                    <td colspan="2"><?php
                        
                            echo $_SESSION['contact'];
                        ?></td>
                </tr>
                <tr>
                    <td>From:</td>
                    <td><?php
                        if($_GET['from']){
                            echo $_GET['from'];
                        }
                    ?></td>
                </tr>
                <tr>
                    <td>To:</td>
                     <td><?php
                        if($_GET['to']){
                            echo $_GET['to'];
                        }?>
                     </td>
                </tr>
                <tr>
                    <td>Arrival Time:</td>
                     <td><?php
                        if($_GET['time1']){
                            echo $_GET['time1'];
                        }?>
                     </td>
                </tr>
                <tr>
                    <td>Departure Time:</td>
                     <td><?php
                        if($_GET['time2']){
                            echo $_GET['time2'];
                        }?>
                     </td>
                </tr>
                <tr>
                    <td>Members:</td>
                    <td><?php
                        if($_GET['member']){
                            echo $_GET['member'];
                        }?></td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td><?php
                        echo $_GET['price']*$_GET['member'];
                    ?></td>
                </tr>
                
                <tr>
                    <td><input type="submit" value="Confirm" title="Click here to register your self"></td>
                    <td><a href="login.php">Logout</a></td>
                </tr>

            </table>
        </form>
        <footer>
        <?php
         include 'footer.php';
        ?>
        </footer>
    </body>
</html>