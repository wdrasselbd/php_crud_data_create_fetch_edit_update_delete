<?php


include('config.php');

$viewsql = "SELECT * FROM student";

$finalviewsql = mysqli_query($conn,$viewsql);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<table border="1" style="margin: auto;">

		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>ADDRESS</th>
			<th>EMAIL</th>
			<th>Action</th>
		</tr>


		<?php
			if($finalviewsql == TRUE){
				while($data = mysqli_fetch_assoc($finalviewsql)){
					$id = $data['ID'];
					$fullname = $data['fullname'];
					$address = $data['address'];
					$email = $data['email'];

					?>

					<tr>
						<td><?php echo $id; ?></td>
						<td><?php echo $fullname; ?></td>
						<td><?php echo $address; ?></td>
						<td><?php echo $email; ?></td>
						<td><a href="edit.php?edit_id=<?php echo $id; ?>">Edit</a>||<a href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
					</tr>

					<?php
				}
			}
		?>

	</table>
</body>
</html>