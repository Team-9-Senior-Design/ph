<?php
    include 'connect.php';
    $d = $conn->query("SELECT fullname, score, progress FROM login WHERE role = 'no'");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/pres1.css" media="screen" />
	<script src="myjs.js"></script>


	<style type="text/css">
	body,html {padding:0; margin:0;width: 100%; height: 100%;
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
			<div class="loginTipPr"> 
				<p1>Scenario</p1>
			</div>
			<div>
				<table class = "table" align="center">
					<tr>
					<th>Name</th>
					<th>score</th>
					<th>progress</th>
					</tr>
					<?php
					if ($d->num_rows > 0) {
	                	while ($result= $d->fetch_assoc()) {
	                		echo "<tr>";
	                		echo "<td>" . $result["fullname"] . "</td>";
	                		echo "<td>" . $result["score"] . "</td>";
	                		echo "<td>" . $result["progress"] . "</td>";
	                		echo "</tr>";

	                	}
	                }	
                	?>
					
				</table>
			</div>
		</div>

		
		<div><a href="secondPage.html" class="button">begin the simulation</a></div>
		
	</div>
	</tbody>

	<script type="text/javascript">
		
	</script>
</body>
</html>