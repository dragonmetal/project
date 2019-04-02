<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center><h2>Adlar sytem</h2></center>
		<center><h3>Welcome to sahyadri library <?php echo $_SESSION['username']; ?></h3></center>
		
		<form action="index.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/sahyadrilogo.png" alt="Avatar" class="avatar">
			</div>
			
			
		</form>
		
		<form action="Displaybooks.php" method="get">
		<div class="inner_container">
				
				<input type="text" placeholder="Enter book name" name="search">
				
				
				<button class="login_button"  type="submit" value "submit">search</button> 
			
			</div>
		</form>	
		
		
	</div>
</body>
</html>