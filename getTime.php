<?php
require "connection.php";

$mysql_qry = "select time from count_time_data";

$result = mysqli_query($conn,$mysql_qry);
$row = mysqli_fetch_array($result);

if(mysqli_num_rows($result)>0){
	
	$data = $row[0];

   if($data){
      echo $data;
   }
	
}else {
	echo "Not received";
}


?>