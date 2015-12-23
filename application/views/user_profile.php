
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Profile</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type ="text/css">
	input{
		display: inline-block;
		margin: 10px 10px 10px 0;
	}
	.btn{
		margin-right: 40px;
	}
	</style>
</head>
<body>
	<div class = 'container'>
		<?php
			// var_dump($user);
			// die();
			if (isset($errors)) {
			 	echo $errors;
		} 
		?>
		<a href="/login/profile" class = 'btn btn-info'>Home</a> 
		<a href="/login/log_off" class = 'btn btn-danger'>Logout</a><hr>
		<h3><?=$user['alias']?>'s Profile</h3>
		<h4>Name: <?=$user['name']?></h4>
		<h4>Email Address: <?=$user['email']?></h4>
	</div>
	

</body>
</html>