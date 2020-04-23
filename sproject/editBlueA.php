<?php
	include 'connect.php';
	$d = $conn->query("SELECT * FROM score");
	$d2 = $conn->query("SELECT id FROM score");
	$d3 = $conn->query("SELECT * FROM score");
	

	while ($rows= $d->fetch_assoc()) {
        $rowss[] = $rows;
    }

    while ($rows= $d2->fetch_assoc()) {
        $rowid[] = $rows['id'];
    }
?>

<!DOCTYPE html>
<html>
<head>


    <meta charset="UTF-8">
	
	<link rel="stylesheet" type="text/css" href="css/admin1.css" media="screen"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style type="text/css" >
		body,html {padding:0; margin:0;width: 100%; height: 100%; color: white;
	}

	.edit1{
		background: #496e9c;
		border: 1px solid white; 
	    border-radius: 20px;
	    width: 1000px;
	    height: 500px;
	    margin-top: 120px; 
	    margin-left: auto;
	    margin-right: auto;
	    overflow: auto;

	}

    ::-webkit-scrollbar{
display:none;
}

	</style>

	<title>edit</title>
</head>
<body>

	<thead>
	<div class="top">
        <a href="admin.php"><img src="img/logi.jpeg" id= "img" alt="top" width="250" height="50" style="margin-top: 10px"></a>
    </div> 
    </thead>
    <div class="">
	<div id="Cusmoters" class="edit1">
		<table border="1" style="margin-top:10px;margin-right: 10px; margin-left: 10px; border: white; width: 100%;">
		
				<tr>
					<th>id</th>
					<th>answer1</th>
					<th>answer2</th>
					<th>answer3</th>
					<th>answer4</th>
				</tr>
		</thead>	
		<?php 
		if ($d3->num_rows > 0) {
			while ($result = $d3->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $result["id"] . "</td>";
                echo "<td>" . $result["a1"] . "</td>";
                echo "<td>" . $result["a2"] . "</td>";
                echo "<td>" . $result["a3"] . "</td>";
                echo "<td>" . $result["a4"] . "</td>";
				echo "</tr>";
			}
		}
		 ?>
		 </table>
	</div>

	<div align="center">
		<form name="f" action="">
		<label>ID:&nbsp;&nbsp;&nbsp;</label><input type="text" name="" id="id" style="margin-bottom: 10px;margin-top: 10px;">

		<input type="button" id="b1" value="search" onclick="search()"><br>

		<label>answer1:&nbsp;&nbsp;&nbsp;</label><textarea value="" id="a1"  rows="4" cols="50" > </textarea> <br>
		
		<label>answer2:&nbsp;&nbsp;&nbsp;</label><textarea value="" id="a2"  rows="4" cols="50" > </textarea> <br>
		
		<label>answer3:&nbsp;&nbsp;&nbsp;</label><textarea value="" id="a3"  rows="4" cols="50" > </textarea> <br>
		
		<label>answer4:&nbsp;&nbsp;&nbsp;</label><textarea value="" id="a4"  rows="4" cols="50" > </textarea> <br>
		


		<input type="button" id="b2" value="ADD" onclick="add()">
		<input type="button" id="b3" value="EDIT" onclick="edit()">
		<input type="button" id="b4" value="DELETE" onclick="Delete()">

		</form>

	</div>
	</div>

</body>
</html>

<script type="text/javascript">
	var r = eval('<?php echo json_encode($rowss);?>');
	var rid = eval('<?php echo json_encode($rowid);?>');

	var id = document.getElementById("id");
	var a1 = document.getElementById("a1");
	var a2 = document.getElementById("a2");
	var a3 = document.getElementById("a3");
	var a4 = document.getElementById("a4");



	function search() {
		var idv = id.value;
		if (rid.indexOf(idv) != -1) {
			idv = idv -1;
			a1.value = r[idv].a1
			a2.value = r[idv].a2
			a3.value = r[idv].a3
			a4.value = r[idv].a4
		
		}

		else {
			alert("This id was not found");
		}


	}


	function add() {
		var idv = id.value;
		if (rid.indexOf(idv) != -1) {
			alert("This id exists");
		}

		else {
			var sid = id.value;
			var sa1 = a1.value;
			var sa2 = a2.value;
			var sa3 = a3.value;
			var sa4 = a4.value;
			
			post('addBA1.php',{
				id:sid,
				a1:sa1,
				a2:sa2,
				a3:sa3,
				a4:sa4,
			
			});
		}
	}

	function edit() {
		var idv = id.value;
		if (rid.indexOf(idv) != -1) {
			var sid = id.value;
			var sa1 = a1.value;
			var sa2 = a2.value;
			var sa3 = a3.value;
			var sa4 = a4.value;
		
			post('editBA1.php',{
				id:sid,
				a1:sa1,
				a2:sa2,
				a3:sa3,
				a4:sa4,
				
			});
		}
		else {
			alert("This id was not found");
		}
	}


	function Delete(){
		var idv = id.value;
		if (rid.indexOf(idv) != -1) {
			var sid = id.value;
			post('deleteBA1.php',{
				id:sid,
			});
		}
		else {
			alert("This id was not found");
		}

	}


	function post(URL, PARAMS) {
        var temp = document.createElement('form')
        temp.action = URL
        temp.method = 'post'
        temp.style.display = 'none'
        for (var x in PARAMS) {
          var opt = document.createElement('textarea')
          opt.name = x
          opt.value = PARAMS[x]
          // alert(opt.name)
          temp.appendChild(opt)
        }
        document.body.appendChild(temp)
        temp.submit()
        document.body.removeChild(temp)
        return temp
 	}
 	

</script>

