<html>
<head>
   <title>Call Doctor</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="game/assets/css/style.css">
</head>

<body>
<div class="parent">
<div class="corona">
<img src="game/assets/images/corona.png" alt="" width="128px">
</div>
<div class="pageCenter">
  <div>
    <input class="textfield" name="email" id="email" value="" placeholder="E-Mail">
  </div>
  <br>
  <br>
  <div>
    <input class="textfield" type="password" name="password" id="password" value="">
  </div>
  <br>
  <br>
  <div>
    <button class="button" onclick="onSubmit()">Login</button>
  </div>
  <br>
  <br>
  <div>
    <button class="scondarybutton" onclick="window.location ='/signup';">Registrieren</button>
  </div>
  <br>
  <br>
  <div>
    <button class="scondarybutton" onclick="window.location ='/anleitung';">Anleitung</button>
  </div>
  <br>
  <br>
  <div>
    <button class="scondarybutton" onclick="window.location ='/contact';">Kontakt / Support Anfrage</button>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$.ajaxSetup({
    xhrFields: {
      withCredentials: true
    }
  });

$.getJSON("api/?action=get_name",
  function(data){
    console.log(data)
    document.getElementById("name").value = data["name"]
  });

function onSubmit() {
  var name = document.getElementById("password").value
  var room = document.getElementById("email").value               
  window.location = "call?id="+room                  
}

</script>
</body>
</html>
