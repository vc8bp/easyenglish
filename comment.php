<?php
	
	include 'db.php';

	if (isset($_POST['post_comment'])) {

		$y_name = $_POST['y_name'];
		$y_message = $_POST['y_message'];
		
		$sql = "INSERT INTO comment (y_name, y_message)
		VALUES ('$y_name', '$y_message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/commentstyle.css">
	<title>comments</title>
</head>
<body>
	<div class="wrapper">
		<form action="" method="post" class="form">
		<div class="wrapper_h1">
		<h1>COMMENTS</h1>
			<input type="text" class="name" name="y_name" placeholder="Name">
			<br>
			<textarea name="y_message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>


</body>
</html>