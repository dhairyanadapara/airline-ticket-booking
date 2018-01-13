<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <title></title>
        <style type="text/css">
        body{
            table-layout: inherit;

        }
        .mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp{
            vertical-align: c
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
        
<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" width="1355">
  <thead>
    <tr>    
        <th>Flight No</th>
        <th>From</th>
        <th>To</th>
        <th>Arrival</th>
        <th>Departure</th>
        <th>Economy</th>
        <th>Business</th>
        </tr>
    </tr>
  </thead>
  <tbody>
    <?php
        //$from=$_POST['from'];
        //$to=$_POST['to'];
                
    try {
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=ce080', 'root','dpn26011998');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select * from schedule1";
        $query = $dbhandler->query($sql);
        while ($r = $query->fetch()) {
            echo"<tr>";
            echo "<td class=\"mdl-data-table__cell--numeric\">".$r['flightno']."</td>";
            echo "<td>".$r['from1']."</td>";
            echo "<td>".$r['to1']."</td>";
            echo "<td>".$r['time1']."</td>";
            echo "<td>".$r['time2']."</td>";
            echo "<td>".$r['price']."</td>";
            echo "<td>".$r['business']."</td>";
            echo "</tr>";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
    ?>
    </tbody>
</table>
</body>
</html>