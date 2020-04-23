<?php
    include 'connect.php';
    $name = $conn->query("SELECT fullname FROM login WHERE role = 'no'");

    $a = $conn->query("SELECT fullname, score, progress,time FROM login WHERE role = 'no'");
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
				<table class = "table" align="center" style="font-size: 20px;">
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
                <button type="submit" id="b" onclick="asd()" style="margin-top: 50%;background: #ee7700; color: white;">submit</button>
            </div>

            <div align="center" style="margin-top: 60px;" >
                <button type="submit" class="b" onclick="editm()" style="background: #ee7700; color: white;">
                    Edit Blue Case
                </button>
            </div>

            <div align="center" style="margin-top: 20px;" >
                <button type="submit" class="b" onclick="editma()" style="background: #ee7700; color: white;">
                    Edit Blue Case Answer
                </button>
            </div>

            <div align="center" style="margin-top: 20px;" >
                <button type="submit" class="b" onclick="edite()" style="background: #ee7700; color: white;">
                    Edit Orange Case
                </button>
            </div>


        

		</div>

		
    </tbody>
    <div id="light" class="white_content" align="center">
            <table>
                <tr>
                <th>Score&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Progress&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>

                <tr>
                
                <td id="t2"></td>
                <td id="t3"></td>
                <td id="t4"></td>
                </tr>
            </table> 
            <a href = "javascript:void(0)" style="color: white" onclick = "closeDialog()">close</a>
    </div> 
    
    <div id="light2" class="white_content" align="center">
        
        <div style="min-width: 350px;">
        <div>
        <form name="f" action="edtime.php">
        <label>Bule Case Time:&nbsp;&nbsp;&nbsp;</label><input type="text" name="" id="mt" style="margin-bottom: 10px;margin-top: 10px;"></div>
        <div>
        <label>Orange case Time:&nbsp;&nbsp;&nbsp;</label><input type="text" name="" id="et" style="margin-bottom: 10px;margin-top: 10px;"></div>

        <div><input type="button" id="b1" value="Edit" onclick="edtime()" ><br></div>

        
        </div>
        </form>
        
        <a href = "javascript:void(0)" style="color: white" onclick = "closeDialog2()">close</a>
    </div> 

    <div id="fade" class="black_overlay"></div> 



    <script type="text/javascript" charset="UTF-8">
        var r = eval('<?php echo json_encode($rows);?>');
        var mt = document.getElementById("mt");
        var et = document.getElementById("et");
        

        function asd(){
            var rn = getParamValues('fullname', r);
            var a = $('#news option:selected').text();
            var n = rn.indexOf(a);
            
            t2.innerText = r[n].score;
            t3.innerText = r[n].progress;
            t4.innerText = r[n].time;
            
            openDialog();
        }

        function openDialog(){
            document.getElementById('light').style.display='block';
            document.getElementById('fade').style.display='block'
        }
        function closeDialog(){
            document.getElementById('light').style.display='none';
            document.getElementById('fade').style.display='none'
        }

        function openDialog2(){
            document.getElementById('light2').style.display='block';
            document.getElementById('fade').style.display='block'
        }
        function closeDialog2(){
            document.getElementById('light2').style.display='none';
            document.getElementById('fade').style.display='none'
        }

        function getParamValues(name, r) {
            var ret = []
            for (var i = 0, len = r.length; i < len; i++) {
                ret.push(r[i][name])
            }
            return ret
        }


        function editm(){
            window.location.href='edit1.php';
        }

        function edite(){
            window.location.href='exploratory1.php';
        }

        function editma(){
            window.location.href='editBlueA.php';
        }

        function edtime(){
            var mt1 = mt.value;
            var et1 = et.value;
            post('edtime.php',{
                mt:mt1,
                et:et1,
            });


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
</body>
</html>