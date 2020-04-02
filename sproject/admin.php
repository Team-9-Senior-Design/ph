<?php
    include 'connect.php';
    $name = $conn->query("SELECT fullname FROM login WHERE role = 'no'");

    $a = $conn->query("SELECT fullname, score, progress FROM login WHERE role = 'no'");
    while ($row= $a->fetch_assoc()) {
        $rows[] = $row;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/admin1.css" media="screen" />
	
	<script src="myjs.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<style type="text/css">
	body,html {padding:0; margin:0;width: 100%; height: 100%;
	} 
	.select{

    }

	</style>
	<title>adminPage</title>
</head>
<body>
	<thead>
	<div class="top">
        <a href="index.php"><img src="img/logi.jpeg" id= "img" alt="top" width="250" height="50" style="margin-top: 10px"></a>
    </div> 
    </thead>

    <tbody>
    	<div class="box" style="background: #496e9c; color: white;" >
    		<div class="a2" align="center"> 
				<p1>Students</p1>
			</div>
    		<div>
				<table class = "table" align="center">
					<tr>
						<th>Name</th>
					</tr>
                   
				</table>
			</div>

            <div align="center">
                <select id="news" size="3" style="overflow: hidden; margin-top: 20px; background: #496e9c; color: white;
                    border: 0px;">
                    <?php
                    if ($name->num_rows > 0) {
                        while ($result= $name->fetch_assoc()) {
                            echo "<option>".$result["fullname"]."</option>";
                        }
                    }   
                    ?>
                </select> <br><br><br>
                <button type="submit" id="b" onclick="asd()">submit</button>
            </div>

            <div align="center" style="margin-top: 250px;" >
                <button type="submit" class="b" onclick="edit()" style="background: #ee7700; color: white">
                    EDIT QUESTION
                </button>
            </div>


		</div>

		
    </tbody>
    <div id="light" class="white_content" align="center">
            <table>
                <tr>
                <th>fullname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>score&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>progress&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>

                <tr>
                <td id="t1"></td>
                <td id="t2"></td>
                <td id="t3"></td>
                </tr>
            </table> 
            <a href = "javascript:void(0)" onclick = "closeDialog()">close</a>
        </div> 
        <div id="fade" class="black_overlay"></div> 
    <script type="text/javascript">
        var r = eval('<?php echo json_encode($rows);?>');
        

        function asd(){
            var rn = getParamValues('fullname', r);
            var a = $('#news option:selected').text();
            var n = rn.indexOf(a);
            t1.innerText = r[n].fullname;
            t2.innerText = r[n].score;
            t3.innerText = r[n].progress;
            
            openDialog();
        }

        function edit(){
            window.location.href='edit1.php';
        }

        function openDialog(){
            document.getElementById('light').style.display='block';
            document.getElementById('fade').style.display='block'
        }
        function closeDialog(){
            document.getElementById('light').style.display='none';
            document.getElementById('fade').style.display='none'
        }

        function getParamValues(name, r) {
            var ret = []
            for (var i = 0, len = r.length; i < len; i++) {
                ret.push(r[i][name])
            }
            return ret
        }

    
    </script>
</body>
</html>