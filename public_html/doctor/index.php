<?php
function currentCode() {
	include '../../engine/connection.php';
				$sql = mysqli_query($conn, "SELECT i.code FROM patient p INNER JOIN invite_link i ON p.invitelink = i.code WHERE doctor_id = 1 AND data_complete=1 AND assistant_check=1 AND status=0 LIMIT 1");
				$row = $sql->fetch_assoc();
				return $row['code'];
}

if(isset($_POST['submit1'])){
	include '../../engine/connection.php';
  	$data = $_POST['textarea'];
  	$code = currentCode();
  	$sql = mysqli_query($conn, "UPDATE patient SET doctor_notes = '$data', status='1' WHERE invitelink='$code'");

	header('Location: /doctor');
}

if(isset($_POST['submit2'])){
	include '../../engine/connection.php';
  	$data = $_POST['textarea'];
  	$code = currentCode();
  	$sql = mysqli_query($conn, "UPDATE patient SET doctor_notes = '$data', status='2' WHERE invitelink='$code'");

	header('Location: /doctor');
}
?>


<html>
<head>
<meta charset="UTF-8">
<title>ConsultNow</title>
<link href="../call/assets/css/boxes.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<div class="grid-container">
	
		
		<main>
			<iframe id="jitsi" allow="camera; microphone" scrolling="no" src="<?php echo "https://meet.jit.si/calldoctor".currentCode()?>" position="absolute" top= "0px" left = "0px" width = "99%" height = "100%" overflow=  "hidden" border = "none" margin = "0" padding = "0"></iframe>
		</main>
		
		<section class="lefttab">
			<h3>Aktueller Videochat</h3>
			 <?php
				include '../../engine/connection.php';
				$sql = mysqli_query($conn, "SELECT name FROM patient p INNER JOIN invite_link i ON p.invitelink = i.code WHERE doctor_id = 1 AND data_complete=1 AND assistant_check=1 AND status=0 LIMIT 20");
				if ($row = $sql->fetch_assoc()) {
					echo "<b>" . $row['name'] . "</b><br><br>";
				}
				echo "<h3>Warteschlange</h3>";

				while ($row = $sql->fetch_assoc()) {
					echo $row['name'] . "<br>";
				}
			?>
		</select> 
		</section>
		
		
		<section class="righttab">
			<h3>Messdaten</h3>
			 <?php
				include '../../engine/connection.php';
				$sql = mysqli_query($conn, "SELECT * FROM patient p INNER JOIN invite_link i ON p.invitelink = i.code WHERE doctor_id = 1 AND data_complete=1 AND assistant_check=1 AND status=0 LIMIT 1");
				$row = $sql->fetch_assoc();
				echo "<b>" . $row['name'] . "</b><br><br>";
				echo "Alter: " . $row['age'] . " Jahre<br>";
				echo "Gewicht: " . $row['weight'] . " KG<br>";
				echo "Temperatur: " . $row['temperature'] . " C<br>";
				echo "Blutdruck: " . $row['bloodpressure'] . "<br>";
				echo "O2-Wert: " . $row['otwo'] . "<br>";
				echo "Atemgeschwindigkeit: " . $row['frequency'] . "<br>";
			?>
		</section>
		
		<section class="footerleft">
			<h3>Hotline Notizen</h3>
			<?php
				include '../../engine/connection.php';
				$sql = mysqli_query($conn, "SELECT * FROM patient p INNER JOIN invite_link i ON p.invitelink = i.code WHERE doctor_id = 1 AND data_complete=1 AND assistant_check=1 AND status=0 LIMIT 1");
				$row = $sql->fetch_assoc();
				echo $row['helpline_notes'] ;
			?> 
		</section>
		
		<section class = "footermid">
			<form method="post" action="#">
			<textarea class="textfieldlong" name="textarea" id="textarea" placeholder="Doktor Notizen" rows="6" style="width:99%"></textarea>
							<button class="button" type="submit" name="submit1">To the Hospital</button>
							<button class="scondarybutton" type="submit" name="submit2">Stay at Home</button>
			</form>
		</section>
	
		<section class = "footerright"><br>
			<h3>Hotline Notizen</h3>
			<?php
				include '../../engine/connection.php';
				$sql = mysqli_query($conn, "SELECT * FROM patient p INNER JOIN invite_link i ON p.invitelink = i.code WHERE doctor_id = 1 AND data_complete=1 AND assistant_check=1 AND status=0 LIMIT 1");
				$row = $sql->fetch_assoc();
				echo $row['assistant_notes'] ;
			?> 
		</section>
		
	</div>
	
	
	
</body>
</html>