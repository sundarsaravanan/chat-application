<?php
session_start();
	include_once("dbconnect.php");
  $to_id=$_GET['to'];
  $id=$_SESSION['id'];


		$query = "update features set new_msg=1 where from_id=$id and to_id=$to_id";
			$result = mysqli_query($dbcon, $query)
			or die('Error querying database.');
			mysqli_close($dbcon);
?>