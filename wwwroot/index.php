<?php 
	$username = "Jason";
	echo "Hello World! Welcome to PHP7 " . $username;
	
	phpinfo();
	
	//http://php.net/manual/en/function.mysql-connect.php
	$conn = mysqli_connect("localhost", "root", "KingMax@0512");
	if($conn)
	{
		echo "connect MariaDB okay";
	}
	else
	{
		echo "connect failed.";
	}
	
	
?>