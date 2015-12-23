
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
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

	.block{
		width: 400px;
		margin: 10px 10px 10px 0;
		vertical-align: top;
		display: inline-block;
		border: 1px solid silver;
		border-radius: 20px;
		padding: 20px;
		
	}
	.block_small{
		width: 400px;
		margin: 10px 10px 10px 0;
		vertical-align: top;
		display: inline-block;
		border: 1px solid silver;
		border-radius: 20px;
		padding: 20px;
		text-align: center;
		
	}
	h5{
		color: red;
	}
	h4{
		color: blue;
	}
	</style>
</head>
<body>
	<div class = 'container'>
		<?php
			// var_dump($friends);
			// var_dump($non_friends);
			// var_dump($other_users);
			// die();
			if (isset($errors)) {
			 	echo $errors;
		} 
		?>

		<h3>Welcome, <?= $friends[0]['name']?>!
		<a href="/login/log_off" class = 'btn btn-danger'>Logout</a>
		</h3>
		<hr>
		<p>Here is the list of your friends:</p>
		
		<?php  
			if (!($friends[0]['friend_id'])) {
				echo "have no friend yet<br>";
			}else{
				echo "<table class = 'table'>";
				echo "<tr>";
				echo "<th>Alias</th>";
				echo "<th>Action</th>";
				echo "</tr>";
				foreach ($friends as $key => $friend) {
					echo "<tr>";
					echo "<td>".$friend['friend_alias']."</td>";
					echo "<td><a href = '/main/show_profile/{$friend['friend_id']}'>View Profile </a> | <a href = '/main/remove_as_friend/{$friend['friend_id']}/{$friends[0]['id']}'>Remove as Friend</a></td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
		
		<h3>Other Users not on your friend's list:</h3>
		<?php
		if (!count($non_friends) && !($friends[0]['friend_id'])) {
		  	echo "<table class = 'table'>";
			echo "<tr>";
			echo "<th>Alias</th>";
			echo "<th>Action</th>";
			echo "</tr>";
			foreach ($other_users as $key => $other_user) {
					echo "<tr>";
					echo "<td><a href = '/main/show_profile/{$other_user['id']}'>".$other_user['alias']."</a></td>";
					echo "<td><a href = '/main/add_friend/{$other_user['id']}/{$friends[0]['id']}' class = 'btn btn-success'>Add as Friend</a></td>";
					echo "</tr>";
					}
					echo "</table>";
		  }else{
		  	if (!count($non_friends)) {
				echo "no such users<br>";
			}else{
					echo "<table class = 'table'>";
					echo "<tr>";
					echo "<th>Alias</th>";
					echo "<th>Action</th>";
					echo "</tr>";
					foreach ($non_friends as $key => $non_friend) {
						echo "<tr>";
						echo "<td><a href = '/main/show_profile/{$non_friend['non_friend_id']}'>".$non_friend['non_friend_alias']."</a></td>";
						echo "<td><a href = '/main/add_friend/{$non_friend['non_friend_id']}/{$friends[0]['id']}' class = 'btn btn-success'>Add as Friend</a></td>";
						echo "</tr>";
					}
					echo "</table>";
				}
		  }  
			
		?>

	</div>
	

</body>
</html>