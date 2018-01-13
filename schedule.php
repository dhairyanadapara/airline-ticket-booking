<?php
	session_start();
?>
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
            <th>Book</th>
            </tr>
            </thead>
            
            
            <?php
            try{
            $_SESSION['uname']=$_POST['uname'];
            $_SESSION['email']=$_POST['email'];
            $_SESSION['age']=$_POST['age'];
            $_SESSION['contact']=$_POST['contact'];
                
			$from=$_POST['from'];
			$to=$_POST['to'];
            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=ce080','root','dpn26011998');
			$dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        	$sql = "select * from schedule1 where from1='$form' and to1='$to'" ;
        	$query = $dbhandler->query($sql);
			while ($r = $query->fetch()) {
				echo"<tr>";
				echo "<td class=\"mdl-data-table__cell--numeric\">".$r['flightno']."</td>";
				echo "<td>".$from."</td>";
				echo "<td>".$to."</td>";
				echo "<td>".$r['time1']."</td>";
				echo "<td>".$r['time2']."</td>";
				echo "<td>".$r['price']."</td>";
				echo "<td>".$r['business']."</td>";
				echo "</tr>";
			}
                /*$member=$_POST['member'];
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $from=$_POST['from'];
                $to=$_POST['to'];
                
                
                $sql="select from1,to1,time1,time2,price,flightno from schedule1 where from1='$from' and to1='$to'";
                $query = $dbhandler->query($sql);
                while($r=$query->fetch()){
                   echo"From:".$from."==>To:".$to."==>Arrival:".$r['time1']."==>Departure:".$r['time2']."==>Price:".$r['price']."==>Flight No:".$r['flightno']."<br>";
                    echo "<div>";
                    echo "<form method=\"POST\" action=\"file3.php\">";
                    echo "<tr>";
                    echo "<td class=\"mdl-data-table__cell--numeric\">".$r['flightno']."</td>";
                    echo "<td>".$from."</td>";
                    echo "<td>".$to."</td>";
                    echo "<td>".$r['time1']."</td>";
                    echo "<td>".$r['time2']."</td>";
                    echo "<td>".$r['price']."</td>";
                    //echo "<td><a href=\"file3.php\" method=\"GET\"><button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\">Button</button></a></td>";
                    //echo "<td><input type=\"submit\" value=\"Book\" class=\"mdl-button mdl-js-button mdl-button--primary\"/></td>";
                    echo "</tr>";
                    echo "</form>";
                    echo "</div>";
                    $p=$r['price'];
                    $t1=$r['time1'];
                    $t2=$r['time2'];
					//$flightno=$r['flightno'];
                    //echo "<a href='file3.php?from=$from&to=$to&price=$p&member=$member&time1=$t1&time2=$t2'>OK</a>"."<br>";
                	*/
            }catch(PDOException $e){
            $e->getMessage();
            die();
            }
        ?>
            
            
            </table>
            <footer>
        <?php
         include 'footer.php';
        ?>
        </footer>
</body>
</html>