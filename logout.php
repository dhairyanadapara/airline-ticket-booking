
<!doctype html>
<?php
	if(session_status() == true)
	{
		session_destroy();
		header("location: login.php");
	}
?>