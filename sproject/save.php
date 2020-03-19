<?php
	include_once 'connect.php';
		$sfname = $_POST['fullName'];
		$suname = $_POST['userName'];
		$spassword = $_POST['passWord'];
		$sql = "INSERT INTO login (usename, password, fullname) values ('{$suname}', '{$spassword}', '{$sfname}')";	
		$conn->query($sql);

		$url = "index.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>"; 
	?>