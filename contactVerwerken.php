<script language="javascript">
    alert("Aanvraag is met succes verzonden!")
            </script>

<meta http-equiv='refresh' content='0; url= contact.php'>
<?php
require('server.php');





$Naam = $_POST{'naam'};
$Email = $_POST{'email'};
$Ond= $_POST{'onderwerp'};
$Vraag = $_POST{'vraag'};


			
			

				
			    $Ontvanger = "info@tgansspel.be";
				$Onderwerp = "Contact 't Gansspel";

				$Boodschap = "
				<html>
				<head>
				<title>Contact formulier</title>
				</head>
				<body>
				<p>Naam: $Naam </p>
                <p>Email adres: $Email </p>
                <p>Onderwerp: $Ond </p>
                <p>Vraag: $Vraag </p>
				
                
                
                ";

				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=windows-1252" . "\r\n";

				// More headers
				$headers .= "From: <noreply@tgansspel.be>" . "\r\n";

				mail($Ontvanger,$Onderwerp,$Boodschap,$headers);

			

mysql_close();


?>