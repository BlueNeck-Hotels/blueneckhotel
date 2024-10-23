<?php 
$_SESSION['start']
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/PHPMailer/src/Exception.php';
require '/PHPMailer/src/PHPMailer.php';
require '/PHPMailer/src/SMTP.php';

if(isset($_POST['clicksubmit']))
{ 

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST  ['phone'];
    $message=$_POST['message'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'blueneckhotel@gmail.com';                     //SMTP username
    $mail->Password   = 'pngmxofsjsvqarqd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('blueneckhotel@gmail.com', 'Mailer');
    $mail->addAddress('mehrapankaj383@gmail.com', 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // // $mail->addReplyTo('info@example.com', 'Information');
    // // $mail->addCC('cc@example.com');
    // // $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>
        <h4>FullName:'.$name.'</h4>
        <h4>Email'.$email.'</h4>
        <h4>Phone:'.$phone.'</h4>
        <h4>Message:'.$message.'</h4>
    ';

    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
        $_session[status]="thank you for your message our team will contact you soon";
        header("Location:{$_SERVER['HTTP_REFERER']}");
        exit(0);}
    else{
        $_session[status]="message could not be sent";
        header("Location:{$_SERVER['HTTP_REFERER']}");
        exit(0);
    } 
    ;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

else{
    header("Location:./index.php");
    exit(0);
}
?>