<?php 
$db_name = "countdown";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";

$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);

//chek connection
if($conn){
		//echo "connection success";
}else{
		//echo "connection unsuccess";
}


?>