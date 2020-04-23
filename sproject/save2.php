<?php
	include_once 'connect.php';
	$userName = $_POST['username'];
	$score = $_POST['score'];
	$time = $_POST['time'];
	$progress = $_POST['progress'];

	$sql = "UPDATE login SET progress = '{$progress}', time = '{$time}', score = '{$score}' WHERE usename = '{$userName}'";
	$conn->query($sql);

	$url = "preSecond.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	?>