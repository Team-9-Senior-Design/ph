<?php
	include_once 'connect.php';
	$id = $_POST['id'];
	$a1 = $_POST['a1'];
	$a2 = $_POST['a2'];
	$a3 = $_POST['a3'];
	$a4 = $_POST['a4'];

	$sql = "UPDATE score SET a1 = '{$a1}', a2 ='{$a2}', a3 = '{$a3}', a4 = '{$a4}' WHERE id = {$id}";
	$conn->query($sql);

	$url = "editBlueA.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	?>