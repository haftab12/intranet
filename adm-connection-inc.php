<?php
//database connection file
$host="intranet-db-service";
$user="root";
$password="niksun2K16!";
#$password="alper";
$db_name="intranet";
$conn_link=mysqli_connect($host,$user,$password, $db_name);
if(!$conn_link) {
	die('Connect Error:'.mysqli_connect_error());
}

?>
