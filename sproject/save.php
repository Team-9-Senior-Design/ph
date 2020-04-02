<?php
	include_once 'connect.php';
		$sfname = $_POST['fullName'];
		$suname = $_POST['userName'];
		$spassword = $_POST['passWord'];
		$role = 'no';
		$score = 0;
		$progress = 'Incomplete';
		$sql = "INSERT INTO login (usename, password, fullname, role, score,  progress) values ('{$suname}', '{$spassword}', '{$sfname}', '{$role}', '{$score}', '{$progress}')";	
		$conn->query($sql);

		$url = "index.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>"; 
	?>