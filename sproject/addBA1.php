<?php
	include_once 'connect.php';
	$id = $_POST['id'];
	$a1 = $_POST['a1'];
	$a2 = $_POST['a2'];
	$a3 = $_POST['a3'];
	$a4 = $_POST['a4'];
	

	$sql = "INSERT INTO score (id, a1, a2, a3, a4) values ('{$id}', '{$a1}', '{$a2}', '{$a3}', '{$a4}')";
	$conn->query($sql);

	$url = "editBlueA.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	?>