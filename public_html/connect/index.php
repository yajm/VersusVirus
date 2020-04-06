<?php
if(isset($_POST['submit'])){
    $code = $_POST["data"];
    header('Location: /invite/?code='. $code);
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
    <h1>Code eingeben</h1>
      <form method="post" action="#">
     <br>
    <br>
     Bitte geben Sie den Code, welcher Sie von der Corona-Hotline per E-Mail erhalten haben ein:
    <br>
      <br>
      (In der Demo noch nicht Verf&uuml;gbar.)
    <br>
    <br>
    <input class="textfield" type="text" name="data" id="data" value="" placeholder="Code" />
    <br>
    <br>
    <button class="button" type="submit" name="submit">Start</button>
  </form>
  </div>
</div>

</div>
</body>
</html>

