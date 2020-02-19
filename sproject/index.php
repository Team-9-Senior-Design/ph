<?php
	include_once 'connect.php';
	$usename = $conn->query("SELECT usename FROM `login`");
	$password = $conn->query("SELECT password FROM `login`");
	$role = $conn->query("SELECT role FROM `login`");
		$ausename = array();
		while($rows= $usename->fetch_assoc())
		{
		  $ausename[] = $rows['usename'];
		} 

		$apassword = array();
		while($rows= $password->fetch_assoc())
		{
		  $apassword[] = $rows['password'];
		} 

		$arole = array();
		while($rows= $role->fetch_assoc())
		{
		  $arole[] = $rows['role'];
		}  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<style type="text/css">
	html,body {
		padding:0; margin:0;width: 100%; height: 100%;
	}	

	</style>
	<title>Log in</title>
</head>
<body>
	<thead>
	<div class="top" style="min-width: 900px">
		<img src="img/logi.jpeg" id= "img" alt="top" width="250" height="60">
	</div>
	</thead> 
	<tbody>
	<div class="bg" style="min-width: 900px">
		<form name="f" action="">

			<div id="login12">
				<h1><br>IDENTITY LIFE</h1>
				<p> <br>
					This simulation will interactively walk 
					students through patient scenarios to present 
					common barriers patients face and the implications 
					on their health and ability to care for themselves. 
					The students will be required to make decisions 
					throughout the simulation that affect their progress 
					through the simulation. This will help equip students
					 to identify and utilize resources to overcome 
					these barriers and develop patient-specific treatment 
					or self-management recommendations.</p>
			</div>




			<div id="login11">
				<div id="loginTip"> 
					<img src="img/logi.png" height="50" />
				</div>

				<div id="login1">
					<img src="img/username.png" width="20" height="20" alt=""/>
					<input type="text" id="userName" placeholder="username" />
				</div>

				<div id="login1">
					<img src="img/password.png" width="20" height="20" alt=""/>
					<input type="password" id="passWord" placeholder="password" />
				</div>

				<div id="logb2">
					<input type="button" value="Log In" 
						style="background-color: #ee7700 ; color: #fff; width: 30%;"
				 		onclick="ulogin()">

				 						<input type="button" value="Sign Up" 
						style="background-color: #ee7700 ; color: #fff; width: 30%;"
				 		onclick="signUp()">
				</div>

				</div>

			</div>
		</form>


	</div>
	</tbody>
	<script language="javascript" type="text/javascript">
	function ulogin() {
	
		var userName = document.getElementById("userName").value;
		var userPass = document.getElementById("passWord").value;
		var u = eval('<?php echo json_encode($ausename);?>');
		var p = eval('<?php echo json_encode($apassword);?>');
		var r = eval('<?php echo json_encode($arole);?>');
		var i = u.indexOf(userName);
		if (u.indexOf(userName) != -1 && p.indexOf(userPass) != -1) {
			window.document.f.action="preSecond.html";
			window.document.f.submit();
		} 
		else if (userName == "" || userName == null) {
			alert("usename is emplty");
			return false;
		} 
		else if (userPass == "" || userPass == null) {
			alert("password is emplty");
			return false;
		} 
		else if (u.indexOf(userName) == -1 || p.indexOf(userPass) == -1) {
			alert("usename or password is error");
			return false;
		} 
		else{
			return true;
		}
	}
	function signUp(){
			window.location.href = 'signUp.html';
		}
	</script>
</body>
</html>