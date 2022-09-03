<?php 

require_once('PHPMailer/PHPMailerAutoload.php');
 use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\Exception;

                    require 'PHPMailer-master/src/PHPMailer.php';
                    require 'PHPMailer-master/src/SMTP.php';
                    require 'PHPMailer-master/src/Exception.php';


                    $mail = new PHPMailer;
                    $mail->isSMTP();

                    $mail->SMTPDebug = 2;
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = 465;
                    $mail->SMTPSecure = 'ssl';
                    $mail->SMTPAuth = true;

                    $mail->isHTML(true);
                    $mail->Username = 'vmael04@gmail.com';
                    $mail->Password = '09040210';
                    $mail->SetFrom('no-reply@example.org', 'Cardinal Alderus');
                    $mail->AddAddress('vincebufete@gmail.com', 'Vince Bufete');
                    $mail->Subject = 'Email Sample';
                    $mail->Body = 'hi bins';


if ($mail->Send()){
	echo "Mail sent";
}
else {
	echo "sending failed" . $mail->ErrorInfo;
}

?>