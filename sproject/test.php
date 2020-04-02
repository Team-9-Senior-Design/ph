<?php
	include 'connect.php';
	$d = $conn->query("SELECT * FROM `question`");

	while ($rows= $d->fetch_assoc()) {
		$rowss[] = $rows;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="">
	<div>
		this is top
	</div>
	<div id="q">
		
	</div>

	<form method="post">
		<input type="button" id="a1" onclick="c1()" value=""> 
		<input type="button" id="a2" onclick="c2()" value=""> 
		<input type="button" id="a3" onclick="c3()" value=""> 
	</form>

	

</body>
</html>


<script type="text/javascript">
	var r = eval('<?php echo json_encode($rowss);?>');


	var qq = document.getElementById("q");
	qq.innerHTML = r[0].q;

	var aa1 = document.getElementById("a1");
	aa1.value = r[0].a1;

	var aa2 = document.getElementById("a2");
	aa2.value = r[0].a2;

	var aa3 = document.getElementById("a3");
	aa3.value = r[0].a3;

	var a1n = r[0].a1;
	var a2n = r[0].a2;
	var a3n = r[0].a3;
	var id = 0;

	function c1() {
		var a1 = document.getElementById("a1").value;
		if (a1 = r[id].a1) {
			id = r[id].a1n -1;
			qq.innerHTML = r[id].q;
			aa1.value = r[id].a1;
			aa2.value = r[id].a2;
			aa3.value = r[id].a3;
		}

	}

	function c2() {
		var a2 = document.getElementById("a2").value;
		if (a2 = r[id].a2) {
			id = r[id].a2n -1;
			qq.innerHTML = r[id].q;
			aa1.value = r[id].a1;
			aa2.value = r[id].a2;
			aa3.value = r[id].a3;
		}

	}

	function c3() {
		var a3 = document.getElementById("a3").value;
		if (a3 = r[id].a3) {
			id = r[id].a3n -1;
			qq.innerHTML = r[id].q;
			aa1.value = r[id].a1;
			aa2.value = r[id].a2;
			aa3.value = r[id].a3;
		}

	}


</script>
