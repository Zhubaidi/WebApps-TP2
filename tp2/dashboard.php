<?php
session_start();
if(empty($_SESSION['username'])){
	echo "<script>alert('Anda belum login');document.location='login.php'</script>";
}

// $time = $_SERVER['REQUEST_TIME'];

// $timeout = 10;

// if (isset($_SESSION['LAST_ACTIVITY']) && 
//    ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
//     session_unset();
//     session_destroy();
//     session_start();
//     header('location:login.php');
// }

// $_SESSION['LAST_ACTIVITY'] = $time;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Dashboard</title>
</head>
<body>
	<div class="container text-center mt-5">
		<div class="jumbotron">
			<h1 class="display-4">Hello, <?=$_SESSION['username']?>!</h1>
			<hr class="my-4">
			<a class="btn btn-danger btn-lg" href="logout.php" role="button">Log out</a>
			</div>
	</div>
	
</body>
</html>