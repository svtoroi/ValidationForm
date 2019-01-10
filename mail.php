<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['Name'];
$phone = $_POST['userPhone'];
$email = $_POST['email'];

//$mail->SMTPDebug = 3;

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = ''; // Ваш адрес почты с которой будут отправляться письма (qwe123@mail.ru)
$mail->Password = ''; // Ваш пароль от почты с которой будут отправляться письма (pass)
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom(''); // адрес почты от кого будет уходить письмо (qwe123@mail.ru)
$mail->addAddress('');     // адрес почты кому будет уходить письмо (ewq321@mail.ru)
//$mail->addAddress('ellen@example.com');
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
$mail->isHTML(true);

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. ' Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
echo 'Error';
} else {
header('location: thank-you.html');
}
?>
