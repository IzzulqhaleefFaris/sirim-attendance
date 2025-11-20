<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>ATTENDANCE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/soljar_ico.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
<div class="d-grid gap-2">
<h3 class="card-title">
      <script>
         var audio = new Audio('http://www.sirimsense.com/attendance/beep-07a.mp3');
         audio.play();
      </script>
<?php

//DATE PROGRAMMED : 19/02/24
//PROGRAMMER : NOR SHUHADA CHE AHMAD
//VERSION : 3

$content = $_REQUEST["content"];
//echo "Content = $content<br>";

$arr = explode("|",$content);
//foreach loop is used to display the returned array

foreach($arr as $i){
	echo $i . "<br />";
}

include 'include/config.php';

//insert to attendance
$queryInsert  = "INSERT INTO attendance (eventid, paxId, paxName, paxCom, paxPhone, paxEmail, attStatus) VALUES ('$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', '$arr[4]', '$arr[5]', '1')";
$resultInsert = mysqli_query($conn, $queryInsert);
	
//header( 'Location: home.php' );


include 'include/closedb.php';
date_default_timezone_set("Asia/Kuala_Lumpur"); 
echo $timeMasuk = date("Y-m-d h:i:s A", time());

?>

</h3>
	<a href="home.php?pg=OFCR" type="button" class="btn btn-lg btn-info" style="font-size: 20px;"><i class="bi bi-upc-scan fs-2"></i>&nbsp;Home</a>
</div>
</html>