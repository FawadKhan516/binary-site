<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes
require '../mailer/src/Exception.php';
require '../mailer/src/PHPMailer.php';
require '../mailer/src/SMTP.php';

$errors = [];
$data = [];

// Input variables
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$messageContent = $_POST['message'] ?? '';

// Validation
if (empty($name)) {
    $errors['name'] = 'Name is required.';
}
if (empty($email)) {
    $errors['email'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email format.';
}
if (empty($phone)) {
    $errors['phone'] = 'Phone is required.';
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p class='ns-msg'>{$error}</p>";
    }
    exit;
}

$messageBody = "
   <table cellspacing='10' border='1' style='color:#000;width:100%;'>
      <tr>
        <td style='background-color:#2d8cb9;color:#fff;text-align:center;' colspan='2'><h1>ACZONE CONSULTANTS</h1></td>
      </tr>
      <tr>
        <td>Full Name:</td>
        <td>{$name}</td>
      </tr>
      <tr>
        <td>Email:</td>
        <td>{$email}</td>
      </tr>
      <tr>
        <td>Phone No:</td>
        <td>{$phone}</td>
      </tr>
      <tr>
        <td>Message:</td>
        <td>{$messageContent}</td>
      </tr>
   </table>
";

$mail = new PHPMailer(true);

try {
    // Google SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ayubabtach22@gmail.com'; // Replace with your Gmail address
    $mail->Password = 'ivlt sdqq rjge ymgy';   // Replace with your App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->SMTPDebug = 3; // Enable verbose debug output
    $mail->Debugoutput = 'html';

    $mail->setFrom('ayubabtach22@gmail.com', 'ACZONE CONSULTANTS');
    $mail->addAddress('ayubabtach22@gmail.com'); // First recipient
    $mail->addAddress('info@aczone.co.uk');      // Second recipient
    
    $mail->isHTML(true);
    $mail->Subject = 'ACZONE CONSULTANTS CONTACT FORM';
    $mail->Body = $messageBody;

    $mail->send();
    echo "<p class='s-msg'>Thank you for your message. It has been sent.</p>";
    echo "<script>
        setTimeout(function () {
            window.location.href = 'https://aczone.co.uk/thankyou.html';
        }, 3000);
    </script>";
} catch (Exception $e) {
    echo "<p class='ns-msg'>Mailer Error: {$mail->ErrorInfo}</p>";
}



