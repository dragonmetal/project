<?php
	session_start();
	require_once('DBConnection.php');
	//phpinfo();
?>
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
<br>
<?php
include("DBConnection.php");
//$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$status=$_POST["status"];
//$edition=$_POST["edition"];
//$publication=$_POST["publication"];
$query = "insert into book_info(title,author) values('$title','$author')"; //Insert query to add book details into the book_info table
$result = mysqli_query($con,$query);
?>
<h3> Book information is inserted successfully </h3>
<a href="SearchBooks.php"> To search for the Book information click here </a>
</body>
</html>