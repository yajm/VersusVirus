<?php
if(isset($_POST['submit'])){
	header('Location: /invite/page0.php?code='. $_GET["code"]);
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
    <h1>Call a Doctor</h1>
    	<form method="post" action="#">
		
		<br>
		<br>
		Willkommen, wir machen nun ein paar Messungen.
		<br>
		<br>
		<button class="button" type="submit" name="submit">Senden</button>
	</form>
  </div>
</div>

</div>
</body>
</html>

