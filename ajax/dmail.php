<?php
$errors = [];
$data = [];
// if(isset($_POST['name'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Array of email addresses to send the message to
$recipients = ["ayubabtach22@gmail.com"];

$subject = "ACZONE CONSAULTANTS CONTACT FORM";

$message = "
   <table cellspacing='10' border='1' style='color:#000;width:100%;'>
      <tr>
        <td style='background-color:#408FCA;color:#fff;text-align:center;' colspan='2'><h1>ACZONE CONSAULTANTS </h1></td>
      </tr>
      <tr>
        <td style='padding:10px;border-left:4px solid #000000;'>Full Name:</td>
        <td style='padding:10px;border-left:4px solid #000000;'>".$name."</td>
      </tr>
      <tr>
        <td style='padding:10px;border-left:4px solid #000000;'>Email:</td>
        <td style='padding:10px;border-left:4px solid #000000;'>".$email."</td>
      </tr>
      <tr>
        <td style='padding:10px;border-left:4px solid #000000;'>Phone No:</td>
        <td style='padding:10px;border-left:4px solid #000000;'>".$phone."</td>
      </tr>
      <tr>
        <td style='padding:10px;border-left:4px solid #000000;'>Message:</td>
        <td style='padding:10px;border-left:4px solid #000000;'>".$message."</td>
      </tr>
   </table>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
// $headers .= 'From: "ACZONE CONSAULTANTS <info@aczone.co.uk>' . "\r\n";

$headers .= 'From: ACZONE CONSAULTANTS <info@aczone.co.uk>' . "\r\n";


$success = true;

// Loop through each recipient and send the email
foreach ($recipients as $to) {
    if (!mail($to, $subject, $message, $headers)) {
        $success = false;
        echo "<p class='ns-msg'>There is some problem in sending email. One or more fields have an error.</p>";
        // break;
    }
    else {
        echo "<p class='s-msg'>Thank you for your message. It has been sent.</p>";
    }
}

// if ($success) {
//     echo "<p class='s-msg'>Thank you for your message. It has been sent.</p>";
// } else {
//     echo "<p class='ns-msg'>There is some problem in sending email. One or more fields have an error.</p>";
// }
?>
