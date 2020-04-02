<?php
    include 'connect.php';
    $d = $conn->query("SELECT * FROM `qq`");

    while ($rows= $d->fetch_assoc()) {
        $rowss[] = $rows;
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
	</style>
	<title>simulation</title>
</head>
<body onload="asd()">
	<div class="top">
        <img src="img/logi.jpeg" id= "img" alt="top" width="250" height="60">
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
            BMI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;31.5 kg/m2<br><br><br><br><br><br>
        </div>
        <div id="q" class="zxc1" align="center"> 
        </div>
    </div>
    <div method="post" align="center" class="button">
        <form name="f" action="">
        <div>
        <input type="button" id="a1" onclick="c1()" value="" 
                style="background-color: #ee7700 ; color: #fff; width: auto;min-width: 100px"></div>
        <div>
        <input type="button" id="a2" onclick="c2()" value=""
                style="background-color: #ee7700 ; color: #fff; width: auto; min-width: 100px; margin-right: 20px; margin-left: 20px"></div>
        <div>
        <input type="button" id="a3" onclick="c3()" value=""
                style="background-color: #ee7700 ; color: #fff; width: auto;min-width: 100px;"></div>
        </form> 
    </div>

    
</body>
</html>
<script type="text/javascript">




    var r = eval('[{"ID":"1","q":"What would be the best plan regarding Danny\u2019s diabetes management given his current situation?","a1":"Continue current medications and focus on lifestyle modifications","a2":"Start glimepiride 2 mg PO daily","a3":"Discontinue pioglitazone and order Farxiga (dapagliflozin) 5 mg PO daily through patient assistance program","a1n":"2","a2n":"13","a3n":"14"},{"ID":"2","q":"Continue current medications and focus on lifestyle modifications","a1":"Discontinue pioglitazone and order Farxiga (dapagliflozin) 5 mg PO daily through patient assistance program","a2":"Send Danny to Walmart to fill pioglitazone","a3":"Discontinue pioglitazone and start glimepiride 2 mg PO daily","a1n":"3","a2n":"5","a3n":"6"},{"ID":"3","q":"You order Farxiga for Danny, but it will take 4-6 weeks for it to arrive. What would you recommend for Danny in the meantime?","a1":"Start glimeperide 2 mg PO daily","a2":"Continue metformin,  focus on lifestyle modifications, closely monitor BG","a3":"","a1n":"4","a2n":"8","a3n":null},{"ID":"4","q":"Danny calls clinic and reports a BG of 72 mg\/dL with shakiness, weakness, and dizziness after taking glimepiride. He refuses to continue this medication due to how it made him feel. What would you recommend next?","a1":"Counsel on management of hypoglycemia and eating patterns and start glipizide 2.5 mg PO daily","a2":"Continue metformin,  focus on lifestyle modifications, closely monitor BG","a3":"","a1n":"8","a2n":"8","a3n":null},{"ID":"5","q":"Dannys car breaks down and he is unable to drive to Walmart, but he can walk to a Winn-Dixie. What medication would you recommend?","a1":"Discontinue pioglitazone and order Farxiga (dapagliflozin) 5 mg PO daily through patient assistance program","a2":"Start glimeperide 2 mg PO daily","a3":"","a1n":"3","a2n":"6","a3n":null},{"ID":"6","q":"Danny calls clinic and reports a BG of 72 mg\/dL with shakiness, weakness, and dizziness after taking glimepiride. He refuses to continue this medication due to how it made him feel. What would you recommend next?","a1":"Counsel on management of hypoglycemia and eating patterns and start glipizide 2.5 mg PO daily","a2":"Continue metformin,  focus on lifestyle modifications, closely monitor BG","a3":"Order Farxiga (dapagliflozin) 5 mg PO daily through patient assistance program","a1n":"8","a2n":"8","a3n":"7"},{"ID":"7","q":"You order Farxiga for Danny, but it will take 4-6 weeks for it to arrive. What would you recommend for Danny in the meantime?","a1":"Continue metformin,  focus on lifestyle modifications, closely monitor BG","a2":"Counsel on management of hypoglycemia and eating patterns and start glipizide 2.5 mg PO daily","a3":null,"a1n":"8","a2n":"8","a3n":null},{"ID":"8","q":"Danny is out of testing supplies, where would you recommend he purchase these?","a1":"Publix","a2":"Winn-Dixie","a3":"Walmart","a1n":"9","a2n":"10","a3n":"11"},{"ID":"9","q":"Danny was not able to afford the testing supplies here, where would you recommend next?","a1":"Walmart","a2":"Winn-Dixie","a3":null,"a1n":null,"a2n":null,"a3n":null},{"ID":"10","q":"Danny was not able to afford the testing supplies here, where would you recommend next?","a1":"Publix","a2":"Walmart","a3":null,"a1n":null,"a2n":null,"a3n":null},{"ID":"11","q":"How often and when should Danny test his BG?","a1":"Only when he has symptoms of hypoglycemia or hyperglycemia","a2":"S\/S of hypo\/hyperglycemia and FBG 2-3x\/week","a3":"S\/S of hypo\/hyperglycemia and FBG daily and one 2-hr PPBG","a1n":null,"a2n":null,"a3n":null}]');
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


    function asd(){
                  
        var time=1800;
        setInterval(function(){
            if (time > 0) {
            time=time-1;
            var minute=parseInt(time/60);
            var second=parseInt(time%60);
            sub.innerHTML= '00:'+toDub(minute)+':'+toDub(second);}

            else {
                alert("the simulation is end");
                window.document.f.action="preSecond.html";
                window.document.f.submit();  
            }
        },1000);
    }
        function toDub(n){
        return n<10?"0"+n:""+n;
    }

</script>


