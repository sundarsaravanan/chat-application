<?php
session_start();
$info = pathinfo($_FILES['userFile']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = time().".$ext";
$target = '../images/'.$newname;
$id=$_SESSION['id'];
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
	include_once("dbconnect.php");
		$query ="update users set profilepic='$newname' where id =$id";
			$result = mysqli_query($dbcon, $query)
			or die('Error querying database.');
			mysqli_close($dbcon);
		header("Location:../home.html");

?>