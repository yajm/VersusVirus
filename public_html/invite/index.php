<?php
if(isset($_POST['submit'])){
	header('Location: /invite/page0.php?code='. $_GET["code"]);
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
    <h1>Willkommen bei ConsultNow.ch</h1>
    	<form method="post" action="#">	
		<br>
		<br>
		Wir referieren Sie an Spitäler, die eine erste persönliche, virtuelle Konsultation mit einem Arzt vereinbaren. Sie müssen sich nicht unnötigen Gefahren auf Ihrem Gang zum Spital aussetzen. Sitzen Sie bequem zu hause und lassen Sie sich in minutenschnelle verbinden. Schnell. Einfach. Sicher. 
<br>
    <br>
Wie funktioniert ConsultNow?
Damit die Ärzte eine möglichst genaue Aussage treffen können, werden einige Vitalparameter wie Temperatur, Puls benötigt. Bevor Sie mit einem Arzt in Verbindung tretten, leiten wir Sie durch einfache und sichere Methoden, um diese Kennzahlen zu messen. Das wars! Sie sind bereit für Ihre Konsultation.
		<br>
		<br>
		<button class="button" type="submit" name="submit">Zu den Messungen</button>
	</form>
  </div>
</div>

</div>
</body>
</html>

