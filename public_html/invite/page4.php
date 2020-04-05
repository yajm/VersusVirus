<?php
if(isset($_POST['submit'])){
	include '../../engine/connection.php';
  	$data = $_POST['data'];
  	$code = $_GET["code"];
  	$sql = mysqli_query($conn, "UPDATE patient SET temperature = '$data', data_complete='1', assistant_check='1' WHERE invitelink='$code'");

	header('Location: /call/?code='. $code);
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
    <h1>Körpertemperatur</h1>
    	<form method="post" action="#">
    	<br>
		<br>
		Bitte messen sie ihre Körpertemperatur mit einem Termometer.<br>
		Falls Sie die Messungen nicht machen können, bitte einfach Felder leer lassen und senden klicken.
		<br>
		<br>
		<input class="textfieldlong" type="text" name="data" id="data" value="" placeholder="Körpertemperatur" />
		<br>
		<br>
		<button class="button" type="submit" name="submit">Senden</button>
	</form>
  </div>
</div>

</div>
</body>
</html>

