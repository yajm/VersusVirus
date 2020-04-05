<?php
if(isset($_POST['submit'])){
	include '../../engine/connection.php';
  	$data = $_POST['data'];
  	$code = $_GET["code"];
  	$sql = mysqli_query($conn, "UPDATE patient SET frequency = '$data' WHERE invitelink='$code'");

	header('Location: /invite/page2.php?code='. $code);
}
?>

<html>
<head>
   <title>ConsultNow.ch</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../call/assets/css/style.css">
</head>

<body>
<div class="parent">
<div class="corona">
<img src="../call/assets/images/corona.png" alt="" width="128px">
</div>
<div class="pageCenter" style="background-color:#FFFFFFE0; height = 80%">
  <div style="padding-left:50px; padding-right:50px; padding-top:50px; padding-bottom:50px">
    <h1>Atemfrequenz Tutorial</h1>
<div class="container">
<iframe src="//www.youtube.com/embed/WBLjMBcaVCE" 
frameborder="0" allowfullscreen class="video"></iframe>
</div>
    	<form method="post" action="#">
		 <br>
    <br>
     Falls Sie die Messungen nicht machen können, bitte einfach Felder leer lassen und senden klicken.
		<br>
		<br>
		<input class="textfield" type="text" name="data" id="data" value="" placeholder="Atemwert" />
		<br>
		<br>
		<button class="button" type="submit" name="submit">Senden</button>
	</form>
  </div>
</div>

</div>
</body>
</html>

