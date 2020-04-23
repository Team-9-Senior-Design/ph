<?php
    include 'connect.php';
    
    $d = $conn->query("SELECT fullname, score, progress,time FROM login WHERE role = 'no'");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/pres.css" media="screen" />
	<script src="myjs.js"></script>


	<style type="text/css">
	body,html {padding:0; margin:0;width: 100%; height: 100%;
	} 
	.loginTipPr2 {

	font-size: 30px;
	width: 86%;
	border-bottom: 1px solid white;
	margin-bottom: 10px;
	margin-top: 10px;
	margin-right: auto;
	margin-left: auto;
	text-align: center; 
}
#loginPr {
	width: 600px;
	height: 500px;
	margin-top: -100px;
	background-color: #496e9c;
	position: absolute;
	border-radius: 15px;
	border: 1px solid white;
	text-align: center;
	color:white;
	overflow:auto;

}


	</style>
	<title>preSecond</title>
</head>
<body>
	<thead>
	<div class="top" style="min-width: 900px; padding-top: 10px;">
        <a href="index.php"><img src="img/logi.jpeg" id= "img" alt="top" width="250" height="50"></a>
    </div> 
    </thead>
    <tbody>
	<div class="backg">
		<div id="loginPr" >
			<div class="loginTipPr2"> 
				<p1>Scenario</p1>
			</div>
			<div>
				<table class = "table" align="center">
					<tr>
					<th style="font-size: 20px;">NAME</th>
					<th style="font-size: 20px;">SCORE &nbsp;&nbsp;&nbsp;</th>
					<th style="font-size: 20px;">PROGRESS&nbsp;&nbsp;&nbsp;</th>
					<th style="font-size: 20px;">TIME</th>
					</tr>

					<?php
                	if ($d->num_rows > 0) {
                   		 while ($result = $d->fetch_assoc()) {
	                        echo "<tr>";
	                        echo "<td>" . $result["fullname"] . "</td>";
	                        echo "<td>" . $result["score"] . "</td>";
	                        echo "<td>" . $result["progress"] . "</td>";
	                        echo "<td>" . $result["time"] . "</td>";
	                        echo "</tr>";
                   		}
	                }
	                ?>		
				</table>
			</div>
		</div>

		
		<div><a href="secondPage.html" class="button" style="background-color: #ee7700 ; color: #fff;">begin the simulation</a>
    	</div>
		
	</div>
	</tbody>

</body>
</html>