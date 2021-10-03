	<?php 
	
$host = "localhost";
$username = "root";
$password = "";
$DBName = "form";

/*$conn = mysql_connect($host, $username, $password, $DBName); outdated, use improved version below*/

$conn = mysqli_connect($host, $username, $password, $DBName);//improved

if ($conn == TRUE){
		echo "";
}else{
	echo "err";
}

	 ?>