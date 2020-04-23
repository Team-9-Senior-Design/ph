<?php
	include_once 'connect.php';
	$mt = $_POST['mt'];
	$et = $_POST['et'];

	if(strlen($mt) != 0) {
		$sql = "UPDATE time SET time = '{$mt}' WHERE id = 1";
	$conn->query($sql);
	}

	if(strlen($et) != 0) {
		$sql = "UPDATE time SET time = '{$et}' WHERE id = 2";
	$conn->query($sql);
	}
	

	$url = "admin.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	?>