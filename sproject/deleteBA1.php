<?php
	include_once 'connect.php';
	$id = $_POST['id'];

	$sql = "DELETE FROM score WHERE id = {$id}";
	$conn->query($sql);

	$url = "editBlueA.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	?>