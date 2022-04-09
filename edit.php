<?php

include ('config.php');

	if(isset($_REQUEST['edit_id'])){
		$edtdata =$_REQUEST['edit_id'];

		$edtdatasql = "SELECT * FROM student WHERE ID = $edtdata";

		$finaledtdatasql = mysqli_query($conn,$edtdatasql);

		if($finaledtdatasql){
			$data = mysqli_fetch_assoc($finaledtdatasql);{
				$fullname = $data['fullname'];
				$address = $data['address'];
				$email = $data['email'];
			}
		}
	}

	if (isset($_REQUEST['submit'])) {
		$edtdata = $_REQUEST['edit_id'];
		$fullname = $_REQUEST['fullname'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];

		$upsql = "UPDATE student SET fullname='$fullname', address='$address', email='$email' WHERE ID = $edtdata ";

		$final = mysqli_query($conn,$upsql);

		if($final == TRUE){
			echo "done";
			header('Location: view.php');
		}else{
			echo "none";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit You Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="" method="POST" style="width: 400px; margin: auto;">
		<input type="text" name="fullname" value="<?php if(isset($fullname)){echo $fullname;} ?>"> <br>
		<input type="text" name="address" value="<?php if(isset($address)){echo $address;} ?>"> <br>
		<input type="email" name="email" value="<?php if(isset($email)){echo $email;} ?>" > <br>
		<input type="submit" value="Update" name="submit"> <br>
	</form>
</body>
</html>