<?php
    include 'connect.php';
    $d = $conn->query("SELECT * FROM `question`");
    $time = $conn->query("SELECT time FROM time WHERE id = 2");

    while ($rows= $d->fetch_assoc()) {
        $rowss[] = $rows;
    }


    while ($rows= $time->fetch_assoc()) {
        $t = $rows["time"];
    }
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/simulation1.css" media="screen" />
	<style type="text/css">
	body,html {padding:0; margin:0;width: 100%; height: 100%;
	} 
    .box {
      margin-top: 70px;
      margin-left:20%;
      margin-right: 20%;
      margin-bottom: 25px; 
      width: auto;
      min-width: 650px;
      height: 800px;
      min-height: 800px;
      background-color: #03244d;
      clear: left;
      z-index: 2;
      overflow:auto;
    }
    .time{
        background: #496e9c;
        color:#ffffff;
        overflow: hidden;
        z-index: 9999;
        position: fixed;
        padding:5px;
        text-align:center;
        width: 175px;
        height: 22px;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        }
    .time.right_top{
        right: 10px;
        top: 10px;
        }



	</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>simulation</title>
</head>
<body onload="asd()">
	<div class="top" style="min-width: 900px; padding-top: 10px;">
        <a href="preSecond.php"><img src="img/logi.jpeg" id= "img" alt="top" width="250" height="50"></a>
    </div> 
    <div id="sub" class="time">00:30:00</div>
    <div class = "box">
        <div class="text">
            <a class="zxc">Initial Case Info</a> <br>
            Danny is a 58 yo AAM who presents to a free clinic to establish care. He lost his job and insurance 2 weeks ago and is concerned about how he will afford his medications. He reports he is currently out of testing supplies for his diabetes but denies any symptoms related to his health problems, including hypoglycemia. He reports he is usually adherent to all of his medications but ran out of his atorvastatin and carvedilol medications 2 weeks ago and has been unable to refill them.<br><br>

            <a class="zxc">PMH:</a> Type 2 DM x 5 years, HFrEF (EF 35%, NYHA II) x 2 years, HTN x 18 years, MDD x 1 year, obesity<br><br>

            <a class="zxc">SH:</a>     &nbsp;&nbsp;&nbsp;Tobacco = + (5 cigarettes/day)      &nbsp;&nbsp;&nbsp;Alcohol =      &nbsp;&nbsp;&nbsp;Illicit Drugs =  <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet: Usually eats 2 meals a day, relies on fast food a few times per week due to cost<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exercise: Walks 20 minutes 3 days a week at the closet mall <br><br>

            <a class="zxc">Vaccine history:</a>  &nbsp;&nbsp;&nbsp; Childhood vaccines up-to-date<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Influenza (1 year ago)<br><br>

            <a class="zxc">Significant vitals and labs:</a> <br>
            Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Today<br>
            BP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;144/86 mm Hg<br>
            HR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;82 bpm<br>
            Wt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;232 lbs<br>
            Ht&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6’<br>
            BMI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;31.5 kg/m2
        </div>
    </div>
    <div style="min-height: 250px;">
        <div id="q" class="zxc1" align="center"> </div> <br><br><br>
    
        <div align="center" class="button">
            <form name="f" action="">
            <div>
            <input type="button" id="a1" onclick="c1()" value="" 
                    style="background-color: #ee7700 ; color: #fff; width: auto;min-width: 100px"></div>
            <div>
            <input type="button" id="a2" onclick="c2()" value=""
                    style="background-color: #ee7700 ; color: #fff; width: auto; min-width: 100px;
                        "></div>
            <div >
            <input type="button" id="a3" onclick="c3()" value="" 
                style="background-color: #ee7700 ; color: #fff; width: auto; min-width: 100px;
                        "></div>
            </form> 
        </div>
    </div>
    
</body>
</html>


<script type="text/javascript" charset="UTF-8">
	//get userName
	var userName = sessionStorage.getItem('username');
	//this is score
	var s = 0;
	// get the row of questions and answer
    var r = eval('<?php echo json_encode($rowss);?>');
    //get the score table from database


    var qq = document.getElementById("q");
    qq.innerHTML = r[0].q;

    var aa1 = document.getElementById("a1");
    aa1.value = r[0].a1;

    var aa2 = document.getElementById("a2");
    aa2.value = r[0].a2;

    var aa3 = document.getElementById("a3");
    aa3.value = r[0].a3;

    var a1n = r[0].a1n;
    var a2n = r[0].a2n;
    var a3n = r[0].a3n;
    var id = 0;
    //reaction for button
    function c1() {
        var a1 = document.getElementById("a1").value;


        // stop the simulation
        if (r[id].a1n == 1111) {
        		alert("the simulation is end");
        		
        		post('save2.php', {username:userName,progress:'complete'});
        	}
        // set the next question and answer
        if (a1 == r[id].a1) {
            id = r[id].a1n -1;
            qq.innerHTML = r[id].q;
            aa1.value = r[id].a1;
        
            if (r[id].a2.length > 0) {
                aa2.value = r[id].a2;
                $("#a2").show();
            }
            else {
               $("#a2").hide(); 
            }
            
            if (r[id].a3.length > 0) {
                aa3.value = r[id].a3;
                $("#a3").show();
            }
            else {
               $("#a3").hide(); 
            }

        }

    }

    function c2() {
        var a2 = document.getElementById("a2").value;
        
        //calculate the score

        // stop the simulation
        if (r[id].a2n == 1111) {
                alert("the simulation is end");
                
                post('save2.php', {username:userName,progress:'complete'});
            }
        // set the next question and answer
        if (a2 == r[id].a2) {
            id = r[id].a2n -1;
            qq.innerHTML = r[id].q;
            aa1.value = r[id].a1;
            
            if (r[id].a2.length > 0) {
                aa2.value = r[id].a2;
                $("#a2").show();
            }
            else {
               $("#a2").hide(); 
            }
            
            if (r[id].a3.length > 0) {
                aa3.value = r[id].a3;
                $("#a3").show();
            }
            else {
               $("#a3").hide(); 
            }

        }

    }

    function c3() {
        var a3 = document.getElementById("a3").value;
        //calculate the score

        if (r[id].a3n == 1111) {
        		alert("the simulation is end");
        		post('save2.php', {username:userName, progress:'complete'});

        		
        	}
        if (a3 == r[id].a3) {
            id = r[id].a3n -1;
            qq.innerHTML = r[id].q;
            aa1.value = r[id].a1;
            if (r[id].a2.length > 0) {
                aa2.value = r[id].a2;
                $("#a2").show();
            }
            else {
               $("#a2").hide(); 
            }
            
            if (r[id].a3.length > 0) {
                aa3.value = r[id].a3;
                $("#a3").show();
            }
            else {
               $("#a3").hide(); 
            }
        }

    }

    function asd(){   
        var t = eval('<?php echo json_encode($t);?>');
        var time=t*60; 
        setInterval(function(){
            if (time > 0) {
            time=time-1;
            var minute=parseInt(time/60);
            var second=parseInt(time%60);
            sub.innerHTML= '00:'+toDub(minute)+':'+toDub(second);}

            else {
                alert("the simulation is end");
                post('save2.php', {username:userName, progress:'incomplete'}); 
            }
        },1000);
        

    }

    

    function toDub(n){
        return n<10?"0"+n:""+n;
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