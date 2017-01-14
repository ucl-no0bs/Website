<?php


include_once('model_safety.php');


// add user and password to database
function add_user ($username, $password){
    global $conn;


    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if(mysqli_query($conn, $sql)){
        echo "user added successfully !"."<br />";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function sendEmail($emailTo){

	require_once 'Mailer/PHPMailerAutoload.php';
	
	date_default_timezone_set('Etc/UTC');
	$mail = new PHPMailer;
	
	//$mail->SMTPDebug = 0;

	$mail->isSMTP();
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = "hack.me.email.enquiry@gmail.com";
	$mail->Password = "hackme123";
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;
	
	$mail->isHTML(true);

	$mail->setFrom("hack.me.email.enquiry@gmail.com", 'H4ck.me');
	$mail->addAddress($emailTo);
	$mail->Subject = 'Welcome to H4ck.me';

	$mail->Body = "Thank you for using <b>H4ck.me</b>. We hope you will enjoy it. :D";


	if(!$mail->send()) {
    	echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
    	echo 'Message has been sent<br>';
	}
}

// echo "model_signup included"."<br />";

 ?>
