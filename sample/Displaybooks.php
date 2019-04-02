<!DOCTYPE HTML>
<html>
<head>
<title>display books</title>

<link rel="stylesheet" href="css/style.css">
</head>
<style>
.button {
  background-color: gray; /* Green */
  border: none;
  color: white;
  padding: 10px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
   margin: 20px 2px;
   cursor: pointer;
   outline: none;
   border-radius: 3px;
   box-shadow: 0 9px #999;
}
.button:hover {background-color: #3e8e41}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(15px);
}
.wrapper {
    text-align: right;
}

.btnon {padding: 20px 20px;}
.btnoff {padding: 20px 20px;}
 </style>
<body >
<center><h2>Adlar System</h2></center>
<br>
 
<?php
include("DBConnection.php");
 
$search = $_REQUEST["search"];
 
$query = "select title,author,status from book_info where title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($con,$query);

 
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
 
{
?>
 
<table border="2" align="center" cellpadding="5" cellspacing="5">
 
<tr>

<th> Title </th>
<th> Author </th>
<th> Status </th>


</tr>
 
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>

<td><?php echo $row["title"];?> </td>
<td><?php echo $row["author"];?> </td>
<td><?php echo $row["status"];?> </td>
<form action="" method="POST">
<td><button class="button btnon" type="submit" name = "ON" >ON</button><br></td>	
<td><button class="button btnoff"  type="submit" name = "OFF" >OFF</button></td>
<td><button class="loginbutton"  type="submit" >Order</button> </td>

</tr>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>
<div class="inner_container">
				
				<a href="index.php"><button type="button" class="logout_button">Log Out</button></a>
			</div>
</body>
</html>
<br>
<?php

$server 	= "localhost:3306";	// Change this to correspond with your database port
$username 	= "root";			// Change if use webhost online
$password 	= "";
$DB 		= "qlda";			// database name


$update = new mysqli($server, $username, $password, $DB);	// Check database connection
			if ($update->connect_error) {
				die("Connection failed: " . $update->connect_error);
			} 
			
			
if(isset($_POST['ON']))			// If press ON
{	
			
			$sql = "UPDATE status SET status = 1";	// Update present status to database
			// If don't put this If , we can't change the value in database
			if ($update->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
				//$_GET[] = 1;						// why i have to put this line but it still run when it's commented
			} 
}

if(isset($_POST['OFF']))		// If press OFF
{					
					
			$sql = "UPDATE status SET status = 0";	// Update present status to database
			// Echo "0" , equivalent with send data to App to toast OFF
			if ($update->query($sql) === TRUE) {	// Because it's been a long time , so i forgot
				//$_GET[] = 0;						// why i have to put this line but it still run when it's commented
			} 
	
	
}			
			

	
?>
