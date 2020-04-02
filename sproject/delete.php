<?php
	include_once 'connect.php';
	$id = $_POST['id'];

	$sql = "DELETE FROM question2 WHERE id = {$id}";
	$conn->query($sql);

	$url = "edit1.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	?>