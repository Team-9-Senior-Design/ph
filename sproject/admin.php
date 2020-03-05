<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/adminn.css" media="screen" />
	
	<script src="myjs.js"></script>


	<style type="text/css">
	body,html {padding:0; margin:0;width: 100%; height: 100%;
	} 
	
	</style>
	<title>adminPage</title>
</head>
<body>
	<thead>
	<div class="top">
        <a href="index.php"><img src="img/logi.jpeg" id= "img" alt="top" width="250" height="60"></a>
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
						<td onclick = "openDialog()">Name1</td>
					</tr>

					<tr>
						<td>Name2</td>
					</tr>
					<tr>
						<td>Name3</td>
					</tr>
					<tr>
						<td>Name4</td>
					</tr>

				</table>
			</div>
		</div>

		
    </tbody>
    <div id="light" class="white_content">
            <table>
                <tr>
                    <td>fffff</td>
                    <td>dddddd</td>
                </tr>
                <tr>
                    <td>fffff</td>
                    <td>dddddd</td>
                </tr>
                <tr>
                    <td>fffff</td>
                    <td>dddddd</td>
                </tr>
            </table> 
            <a href = "javascript:void(0)" onclick = "closeDialog()">colse</a>
        </div> 
        <div id="fade" class="black_overlay"></div> 
    <script type="text/javascript">
        function openDialog(){
            document.getElementById('light').style.display='block';
            document.getElementById('fade').style.display='block'
        }
        function closeDialog(){
            document.getElementById('light').style.display='none';
            document.getElementById('fade').style.display='none'
        }
    </script>
</body>
</html>