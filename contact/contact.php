<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>Contact V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require "../vendor/autoload.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$message = $_POST["message"];
		$email = $_POST["email"];
		// 
		$forms_erreur = array();
		if (strlen($name) <= 3) {
			$forms_erreur[] = "please write correct name !";
		}
		if (strlen($message) < 8) {
			$forms_erreur[] = "Please write correct message !";
		}
		$headers =  'MIME-Version: 1.0' . "\r\n";
		$headers .= "From: $email" . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		if (empty($forms_erreur)) {
			$mail = new PHPMailer();

			//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'howhave157@gmail.com';                     //SMTP username
			$mail->Password   = 'exprspjdlpsduede';                               //SMTP password
			$mail->SMTPSecure = "tsl";            //Enable implicit TLS encryption
			$mail->Port       = 587;

			$mail->isHTML(true);
			$mail->CharSet = "UTF-8";
			//Recipients
			$mail->setFrom($email, 'Get Help');   //Add a recipient
			$mail->addAddress($email);
			$mail->Subject = "get help";
			$mail->Body = $message;
			$res = "";
			if ($mail->send()) {
				$res = "<p style='background-color:#cef5d6; margin:20px 0;padding:20px ;border:1px solid #027a1a; text-align:center; '>The message has been sent </p>";
			} else {
				$res = "<p style='background-color:#f3c2c2; margin:20px 0;padding:20px ;border:1px solid #f40505; text-align:center;'>Somthing wrong</p>";
			}
		}
	}
	?>
	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>" class="contact2-form validate-form">
					<span class="contact2-form-title">
						Contact Us
					</span>
					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NAME"></span>
					</div>
					<div class="wrap-input2 validate-input">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate="Message is required">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="MESSAGE"></span>
					</div>
					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button name="send" type="submit" class="contact2-form-btn">
								Send Your Message
							</button>
						</div>
						<div>
							<?php
							if (isset($forms_erreur)) {

								foreach ($forms_erreur as $err) {
									echo "<p style='color: red; text-align:center;'> * $err </p>";
								}
							}
							?>
						</div>
					</div>
					<?php
					if (isset($res)) {
						echo $res;
					} ?>
				</form>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>