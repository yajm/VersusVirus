<?php 
$nameErr = $emailErr = $messageErr = "";

if(isset($_POST['submit'])){
	if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  if (empty($_POST["textarea"])) {
    $messageErr = "Message is required";
  }
  if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["textarea"])) {
    $to = "info@consultnow.ch"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Contact - Submission";
    $subject2 = "Submission on Call Doctor";
    $message = $name . " with the E-Mail: " . $from . " wrote the following:" . "\n\n" . $_POST['textarea'] . "\n\n";
    $message2 = "Mail sent: " . $name . "\n\n" . $_POST['textarea'] . "\n\nI will contact you shortly.";

    $headers = "From:" . $from; # "pas.schaerli@sunrise.ch"
    $headers2 = "From:" . $to; # "passcha@student.ethz.ch"
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: /');
	}
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Call Doctor</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../call/assets/css/style.css">
	</head>
	<body>
		<div class="parent">
			<div class="corona">
<img src="../call/assets/images/corona.png" alt="" width="128px">
</div>
<div class="contactCenter">
	<div>
    <font size="6" color="white">
		Kontakt / Support Anfrage
  </font>
	</div>
		
		<br>
							<br>
							
							<div>
				<form method="post" action="#">
					
							<input class="textfieldlong" type="text" name="name" id="name" value="" placeholder="Name" />
							<span class="error"> <?php echo $nameErr;?></span>
							<br>
							<br>
							<input class="textfieldlong" type="email" name="email" id="email" value="" placeholder="Email" />
							<span class="error"> <?php echo $emailErr;?></span>
							<br>
							<br>
							<textarea class="textfieldlong" name="textarea" id="textarea" placeholder="Frage" rows="6"></textarea>
							<span class="error"> <?php echo $messageErr;?></span>
							<br>
							<br>
							<button class="button" type="submit" name="submit">Senden</button>		
				</form>	
			</div>
		</div>

</div>
</body>
</html>