<?php
	include_once 'connect.php';
	$id = $_POST['id'];
	
	$sql = "DELETE FROM question WHERE ID = {$id}";
	$conn->query($sql);

	$url = "exploratory1.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	?>