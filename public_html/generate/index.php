<?php 
$nameErr = $emailErr = $messageErr = "";

if(isset($_POST['submit'])){
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  if (!empty($_POST["email"]) ) {
  	include '../../engine/connection.php';
  	$code = $_POST['code'];
  	$ass = $_POST["assistant"];
  	$doctor = $_POST['doctor'];
  	$hospital = $_POST['hospital'];
  	$notes = $_POST['notes'];
  	$to = $_POST['email'];
  	$name = $_POST['name'];

  	$sql = mysqli_query($conn, "INSERT INTO invite_link (code, hotline_id, assistant_id, doctor_id, hospital_id) VALUES ('$code', 1, '$ass', '$doctor', '$hospital')");

  	$sql = mysqli_query($conn, "INSERT INTO patient (name, email, invitelink, helpline_notes) VALUES ('$name', '$to', '$code', '$notes')");

     
    $from = "info@consultnow.ch";
    $subject = "Invite Link - ConsultNow";
    $message = "<html><body>Sehr geehrte/r " . $name . ",<br><br>Vielen Dank f&uuml;r Ihre Registration auf ConsultNow! <br><br>Sie sind fast mit Ihrem Arzt verbunden! Bitte klicken Sie auf den folgenden Link, um in minutenschnelle Ihre pers&ouml;nliche Konsultation anzutreten.<br><br><a href='https://student-uzh.ch/invite/?code=" . $code . "'>student-uzh.ch/invite/?code=" . $code . "</a><br><br>Alternativ k&ouml;nnen Sie direkt &uuml;ber unsere Webseite einloggen mit dem Code: " . $code . "<br><br>Wir w&uuml;nschen Ihnen beste Gesundheit.<br><br>Mit freundlichen Gr&uuml;ssen,<br>
Ihr ConsultNow Team</body></html>";
    $headers = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";
    mail($to,$subject,$message,$headers);

    header('Location: /generate');
	}
}
?>


<html>
<head>
   <title>Call Doctor</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../call/assets/css/style.css">
</head>


<body>
<?php
function generateRandomString($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
<div class="parent">
<div class="corona">
<img src="../call/assets/images/corona.png" alt="" width="128px">
</div>
<div class="pageCenter" style="background-color:#FFFFFFE0; height = 80%">
  <div style="padding-left:50px; padding-right:50px; padding-top:50px; padding-bottom:50px">
    <h1>Hotline - Generate Invite Link</h1>
    	<form method="post" action="#">
		<select name="doctor" id="doctor" selected="Select a Doctor">
		<?php 
		include '../../engine/connection.php';
		$sql = mysqli_query($conn, "SELECT id, name FROM doctor");
		while ($row = $sql->fetch_assoc()){
		echo "<option value=". $row['id'] . ">" . $row['name'] . "</option>";
		}
		?>
		</select>
		<br>
		<br>
		<select name="assistant" id="assistant" selected="Select an Assistant">
		<?php 
		$sql = mysqli_query($conn, "SELECT id, name FROM assistant");
		while ($row = $sql->fetch_assoc()){
		echo "<option value=". $row['id'] . ">" . $row['name'] . "</option>";
		}
		?>
		</select>
		<br>
		<br>
		<select name="hospital" id="hospital" selected="Select a Hospital">
		<?php 
		$sql = mysqli_query($conn, "SELECT id, name FROM hospital");
		while ($row = $sql->fetch_assoc()){
		echo "<option value=". $row['id'] . ">" . $row['name'] . "</option>";
		}
		?>
		</select>
		<br>
		<br>
		<input class="textfieldlong" type="text" name="name" id="name" value="" placeholder="Name" />
		<br>
		<br>
		<input class="textfieldlong" type="text" name="email" id="email" value="" placeholder="E-Mail" />
		<span class="error"> <?php echo $emailErr;?></span>
		<br>
		<br>
		<textarea class="textfieldlong" name="notes" id="notes" placeholder="Anmerkungen" rows="6"></textarea>
		<br>
		<br>
		<input class="textfieldlong" type="text" name="code" id="code" value="<?php echo generateRandomString() ?>"/>
		<br>
		<br>
		<button class="button" type="submit" name="submit">Senden</button>
	</form>
  </div>
</div>

</div>
</body>
</html>

