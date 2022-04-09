<?php

include ('config.php');

$dlt = $_REQUEST['id'];


$dltsql = "DELETE FROM student WHERE ID = $dlt";

$finaldltsql = mysqli_query($conn,$dltsql);

if($finaldltsql == TRUE){
	echo "Data Delete";
	header("Location: view.php?deleted");
}else{
	echo "Data Not Delete";
}

?>