<html>
<head><title>Call Doctor</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<canvas id="callField" width="2700" height="1024"></canvas>
<iframe id="jitsi" allow="camera; microphone" scrolling="no" src="<?php echo "https://meet.jit.si/calldoctor".$_GET["id"];?>"></iframe>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/call.js"></script>  

<script type="text/javascript">
  $.getJSON("../api/?action=database",
      function(data) {

  });
</script>
</body>
</html>