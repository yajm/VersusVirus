<?php
if(isset($_POST['submit'])){
	include '../../engine/connection.php';
  	$data = $_POST['data'];
    $data2 = $_POST['data2'];
  	$code = $_GET["code"];
  	$sql = mysqli_query($conn, "UPDATE patient SET age = '$data', weight = '$data2' WHERE invitelink='$code'");

	header('Location: /invite/page1.php?code='. $code);
}
?>

<html>
<head>
   <title>Call Doctor</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../call/assets/css/style.css">
</head>

<style>
  .pageCenter {
    transform: translate(-50%, -20%);
  }
</style>

<body>
<div class="parent">
<div class="corona">
<img src="../call/assets/images/corona.png" alt="" width="128px">
</div>
<div class="pageCenter" style="background-color:#FFFFFFE0; height = 80%">
  <div style="padding-left:50px; padding-right:50px; padding-top:50px; padding-bottom:50px">
    <h1>Alter / Gewicht</h1>
    	<form method="post" action="#">
		 <br>
    <br>
    <input class="textfieldlong" type="text" name="data" id="data" value="" placeholder="Alter" />
		<br>
		<br>
		<input class="textfieldlong" type="text" name="data2" id="data2" value="" placeholder="Gewicht" />
		<br>
		<br>
		<button class="button" type="submit" name="submit">Senden</button>
	</form>
  </div>
</div>

</div>
</body>
</html>

