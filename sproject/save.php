<?php
	include_once 'connect.php';
		$sfname = $_POST['fullName'];
		$suname = $_POST['userName'];
		$spassword = $_POST['passWord'];
		$role = 'no';
		$score = 0;
		$progress = 'Incomplete';
		$time = '00:00:00'
		$sql = "INSERT INTO login (usename, password, fullname, role, score,  progress, time) values ('{$suname}', '{$spassword}', '{$sfname}', '{$role}', '{$score}', '{$progress}', '{$time}')";	
		$conn->query($sql);

		$url = "index.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>"; 
	?>