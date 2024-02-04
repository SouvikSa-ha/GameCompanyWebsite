<?php include_once 'Assets/Includes/connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Demo</title>
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
	<link href="Assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="Assets/icons/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="Assets/css/card_style.css">
</head>
<body class="">
	<div class="container">
		<div style="overflow-x: scroll">
			<div class="d-flex">
				<div class="card" style="min-width: 18rem; width: 18rem;">
					<img src="Assets/images/index.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card" style="min-width: 18rem; width: 18rem;">
					<img src="Assets/images/index.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card" style="min-width: 18rem; width: 18rem;">
					<img src="Assets/images/index.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card" style="min-width: 18rem; width: 18rem;">
					<img src="Assets/images/index.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card" style="min-width: 18rem; width: 18rem;">
					<img src="Assets/images/index.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card" style="min-width: 18rem; width: 18rem;">
					<img src="Assets/images/index.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card" style="min-width: 18rem; width: 18rem;">
					<img src="Assets/images/index.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card" style="min-width: 18rem; width: 18rem;">
					<img src="Assets/images/index.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				
			</div>
		</div>
		<?php 
			$sql = "select * from hello;";
			$result = mysqli_query($con, $sql);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					echo $row['name'] . '<br>';
				}
			}
			
		?>
		<h1 class="display-1 my-5"><?php ?></h1>
	</div>
</body>
</html>


<?php 
	$data = '';
	//Create a template
	$sql = "select * from hello where id=?;";
	//Create a prepared statemenet
	$stmt = mysqli_stmt_init($con);
	//prepare the prepared statement
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo "sql statement failed";
	} else{
		//bind parameters to the placeholder
		mysqli_stmt_bind_param($stmt, "s", $data); 
		/*
			number of s=no of placeholder
			if, two ?,  then "ss" and so on
		*/
		//eun parameters inside database
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		while($row = mysqli_fetch_assoc($result)){
			echo $row['name'] . '<br>';
		}
	}

	//to insert
	$f = mysqli_real_escape_string($con, $_POST['f']);
	$g = mysqli_real_escape_string($con, $_POST['g']);
	$h = mysqli_real_escape_string($con, $_POST['h']);
	
	$sql = "insert into hello (id, name, description)
		values (?, ?, ?);";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo "sql statement failed";
	} else{
		mysqli_stmt_bind_param($stmt, "sss", $f, $g, $h); 
		mysqli_stmt_execute($stmt);
	}


	?>

	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="submit">Upload</button>
	</form>
	<?php
		if(isset($_POST['submit'])){
			$file = $_FILES['file'];
			$fileName = $_FILES['file']['name'];
			$fileTmpName = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$fileError = $_FILES['file']['error'];
			$fileType = $_FILES['file']['type'];
			
			$fileExt = explode('.', $fileName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg', 'jpeg', 'png');
			if(in_array($fileActualExt, $allowed)){
				if($fileError === 0){
					if($fileSize < 10000){
						$fileNameNew = uniqid('', true).".".$fileActualExt;
						$fileDestination = 'Assets/images/'.$fileNameNew;
						move_uploaded_file($fileTmpName, $fileDestination);
						header("Location: file.php?upload=success");
					}
					else{
						echo "Your file is too big!";
					}
				} else{
					echo "There was an error uploading your file";
				}
			} else{
				header("Location: ../file.php?upload=extensoin_error");
				echo "You cannot Upload files of this type!";
			}
			
		}
	?>