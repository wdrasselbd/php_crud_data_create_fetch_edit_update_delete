<?php


include('config.php');

if(isset($_POST['submit'])){
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
	$email = $_POST['email'];


	$infosql = "INSERT INTO student (fullname,address,email) VALUES('$fullname','$address','$email')";

	$finalinfosql = mysqli_query($conn,$infosql);

		if($finalinfosql == TRUE){
			echo "data submit";
			header("Location: view.php");
		}else{
			echo "not submitted";
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Input Infomation</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="" method="POST" style="width: 400px; margin: auto;">
		<input type="text" name="fullname" placeholder="Your Full Name"> <br>
		<input type="text" name="address" placeholder="Your Address"> <br>
		<input type="email" name="email" placeholder="Your Email"> <br>
		<input type="submit" value="submit" name="submit"> <br>
	</form>
	
</body>
</html>