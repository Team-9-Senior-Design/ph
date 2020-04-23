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
	

	$sql = "UPDATE question SET q = '{$q}', a1 = '{$a1}', a2 ='{$a2}', a3 = '{$a3}', a1n = '{$a1n}', a2n = '{$a2n}', a3n = '{$a3n}' WHERE ID = {$id}";
	$conn->query($sql);

	$url = "exploratory1.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	?>