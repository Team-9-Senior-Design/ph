<?php
	include_once 'connect.php';
	$userName = $_POST['username'];
	$score = $_POST['score'];
	$progress = $_POST['progress'];

	$sql = "UPDATE login SET score = {$score}, progress = '{$progress}' WHERE usename = '{$userName}'";
	$conn->query($sql);

	$url = "preSecond.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	?>