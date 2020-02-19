
<?php

header("Content-type:text/html;charset=utf-8");

$host="acadmysql.duc.auburn.edu";
$user="zzw0035";
$pwd="asd123456";
$name = "zzw0035db";

$conn = new mysqli($host,$user,$pwd,$name);


if(!$conn){
    die("CONNECT error！".mysql_errno());
}else{
	
	}

?>