<?php
	include_once 'connect.php';
	$id = $_POST['id'];
	$q = $_POST['q'];
	$a1 = $_POST['a1'];
	$a2 = $_POST['a2'];
	$a3 = $_POST['a3'];
	$a1n = $_POST['a1n'];
	$a2n = $_POST['a2n'];
	$a3n = $_POST['a3n'];
	

	$sql = "INSERT INTO question (ID, q, a1, a2, a3, a1n, a2n, a3n) values ('{$id}', '{$q}', '{$a1}', '{$a2}', '{$a3}', '{$a1n}','{$a2n}','{$a3n}')";
	$conn->query($sql);

	$url = "exploratory1.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	?>