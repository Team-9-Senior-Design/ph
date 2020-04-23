<?php
    include 'connect.php';
    $d = $conn->query("SELECT * FROM question2");
    $d2 = $conn->query("SELECT id FROM question2");
    $time = $conn->query("SELECT time FROM time WHERE id = 1");
    $s = $conn->query("SELECT * FROM score");

    while ($rows= $d->fetch_assoc()) {
        $rowss[] = $rows;
    }

    while ($rows= $d2->fetch_assoc()) {
        $rowid[] = $rows;
    }



    while ($rows= $time->fetch_assoc()) {
        $t = $rows["time"];
    }

     while ($rows= $s->fetch_assoc()) {
        $sr[] = $rows;
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
      overflow: auto;
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
            Samantha is a 46 yo WF who presents to clinic to establish care. She was admitted to the hospital after developing a proximal deep vein thrombosis (DVT) in her left leg and was subsequently discharged 2 weeks ago. The DVT was classified as provoked due to temporary immobility. The patient reports that she regularly walks several miles every day but had fallen and fractured her ankle. In efforts to rest and heal, she was in a splint for several weeks, significantly reducing her mobility prior to developing the DVT. In the hospital, she was initially treated with Lovenox but was switched to Eliquis (apixaban) 10 mg PO BID x 1 week and is currently prescribed Eliquis (apixaban) 5 mg PO BID to complete 3 months of therapy, although she reports occasionally taking 1 tablet daily in efforts to “stretch the medicine”. She was discharged with a 2-week supply at the hospital and with a new prescription but she reports going to the pharmacy and not being able to afford the new prescription since it was over $500. Her family participates in a Christian medical sharing plan but this does offer any drug coverage. She currently has 4 tablets left and reports no other problems with taking the medication but does request an anticoagulant with the lowest risk of bleeding due to her refusal of blood transfusions.<br><br>

            <a class="zxc">PMH:</a> Provoked DVT in left femoropopliteal location <br><br>

            <a class="zxc">SH:</a>     &nbsp;&nbsp;&nbsp;Tobacco =       &nbsp;&nbsp;&nbsp;Alcohol =      &nbsp;&nbsp;&nbsp;Illicit Drugs =  <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet: Usually eats three home-cooked meals, health-conscious<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exercise: Walks minimum of 60-120 minutes every day <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Occupation: Stay at home mother of six children <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Insurance: None, but participates in Christian medical cost sharing (no official coverage) <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other: Married; Jehovah’s Witness (declines blood transfusions); low-income patient (135% of Federal Poverty Level) <br><br>
            <a class="zxc">Allergies/Intolerances:</a>  &nbsp;&nbsp;&nbsp; NKDA<br>
            <a class="zxc">Current Meds:</a>  &nbsp;&nbsp;&nbsp; Eliquis (apixaban) 5 mg PO BID<br>
            <a class="zxc">Vaccine history:</a>  &nbsp;&nbsp;&nbsp; Childhood vaccines up-to-date<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

            <a class="zxc">Significant vitals and labs:</a> <br>
            Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Today<br>
            BP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;126/76 mm Hg<br>
            HR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;72 bpm<br>
            Wt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;148 lbs<br>
            Ht&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5'7"<br>
            BMI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;23.2 kg/m2
        </div>
        
    </div>
    <div style="min-height: 250px;">
        <div id="q" class="zxc1" align="center"> 
            </div> <br><br><br>
        <div align="center" class="button" style="color: white;">
            <form name="f" action="">
            <input type="checkbox" name="aa" value="1">a<br>
            <input type="checkbox" name="aa" value="2">a<br>
            <input type="checkbox" name="aa" value="3">a<br>
            <input type="checkbox" name="aa" value="4" id="4444" style="display:none">a<br>
            <input type="button" id="a3" onclick="fff()" value="next questions"
            style="background-color: #ee7700 ; color: #fff; width: auto;min-width: 100px">
            </form> 
        </div>
    </div>
    
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" charset="UTF-8">
    
    var dd = 0;
    var gs = 0;
    var ccc = 0;
	//get userName
	var userName = sessionStorage.getItem('username');
	// get the row of questions and answer
    var r = eval('<?php echo json_encode($rowss);?>');
    //get the score table from database
    var id = eval('<?php echo json_encode($rowid);?>');

    var an = eval('<?php echo json_encode($sr);?>');



    var time2 = 0;
    var time3 = "";



    var qq = document.getElementById("q");
    qq.innerHTML = r[0].q;
    var cc=document.getElementsByName("aa"); 
    cc[0].nextSibling.nodeValue = r[0].a1;
    cc[1].nextSibling.nodeValue = r[0].a2;
    cc[2].nextSibling.nodeValue = r[0].a3;
    cc[3].nextSibling.nodeValue = r[0].a4;

    if (r[0].a4.length > 0) {
        $("#4444").show();
    }

    function fff() {
        var length = 0;
        var ss = 0;

        var ar = new Array();
        ar[0] = an[ccc].a1;
        ar[1] = an[ccc].a2;
        ar[2] = an[ccc].a3;
        ar[3] = an[ccc].a4;

       

        dd++;
        ccc++;

        for (var i=0; i < 4; i++)  {
            if (cc[i].checked) {
                if (ar.indexOf(cc[i].nextSibling.nodeValue) != -1) {
                    ss++;
                }
                else {
                    ss--;
                }
            }
        }

        

        for (var i = 0; i < 4; i++) {
            if (ar[i] != "null") {
                length++;
            }
        }

        if(ss == length) {
            gs = gs + 10;
        }


        var dl = id.length;
        if (dd == dl) {
            alert("the simulation is end1");
            post('save2.php', {username:userName, score:gs, time:time3, progress:'complete'});

        }

        
        var d = id[dd].id - 1;
        
        $("input:checkbox").prop("checked", false);
        qq.innerHTML = r[d].q;
        cc[0].nextSibling.nodeValue = r[d].a1;
        cc[1].nextSibling.nodeValue = r[d].a2;
        cc[2].nextSibling.nodeValue = r[d].a3;
        cc[3].nextSibling.nodeValue = r[d].a4;
        if (r[d].a4.length > 0) {
            $("#4444").show();
        }
        else {
            $("#4444").hide();
        }

    }




    function asd(){ 
        var t = eval('<?php echo json_encode($t);?>'); 
        var time=t*60; 

        setInterval(function(){
                
            if (time > 0) {
            time=time-1;
            time2 = time2 + 1;
            var minute=parseInt(time/60);
            var second=parseInt(time%60);
            sub.innerHTML= '00:'+toDub(minute)+':'+toDub(second);

            var minute2=parseInt(time2/60);
            var second2=parseInt(time2%60);
            time3 = '00:'+toDub(minute2)+':'+toDub(second2);}

            else {
                alert("the simulation is end");
                post('save2.php', {username:userName, score:gs, time:time3, progress:'incomplete'}); 
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