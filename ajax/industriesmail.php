<?php



$errors = [];

$data = [];



    $name = $_POST['name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $industrytype = $_POST['industrytype'];

    $message = $_POST['message'];



if (empty($_POST['name'])) {

    echo $errors['name'] = '<p>Name is required.</p>';

}



if (empty($_POST['email'])) {

    echo $errors['email'] = '<p>Email is required.</p>';

}



if (empty($_POST['phone'])) {

    echo $errors['phone'] = '<p>Phone is required.</p>';

}



if (!empty($errors)) {

    $data['success'] = false;

    $data['errors'] = $errors;

} else {

    $data['success'] = true;

    $data['message'] = 'Success!';

    

    require '../mailer/PHPMailerAutoload.php';

    $json = array();

    $mail = new PHPMailer();

    $mail->IsSMTP(); // telling the class to use SMTP

    $mail->SMTPDebug  = 0;    // enables SMTP debug information (for testing)

    $mail->SMTPAuth   = true; // enable SMTP authentication

    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier

    // $mail->Host       = "mail.amazonselfpublishers.com";  // mail.sets smtp.gmail.com GMAIL as the SMTP server
  $mail->Host       = "smtp.gmail.com";///
    $mail->Port       = 465; // or 587 set the SMTP port for the GMAIL server

    // $mail->Username   = "support@amazonselfpublishers.com";  // GMAIL username
    $mail->Username   = "adam@binarydesignhub.com";  // GMAIL username
    
    $mail->Password   = "Rv3YEf})_2w&";  // srxlmyjmmsdugahp

    $mail->SetFrom('support@amazonselfpublishers.com', 'Amazon Self Publishers');

    $mail->Subject = 'Amazon Self Publishers | Lead Form';

    /* $mail->Body    = $template;*/

    // $mail->AltBody = $template; // optional, comment out and test

    $mail->MsgHTML("

         <table cellspacing='10' border='1' style='color:#000;width:100%;'>

      <tr>

        <td style='background-color:#df292a;color:#fff;text-align:center;' colspan='2'><h1>Visionary Soft </h1></td>

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

        <td style='padding:10px;border-left:4px solid #000000;'>Industry Type:</td>

        <td style='padding:10px;border-left:4px solid #000000;'>".$industrytype."</td>

      </tr>

      <tr>

        <td style='padding:10px;border-left:4px solid #000000;'>Message:</td>

        <td style='padding:10px;border-left:4px solid #000000;'>".$message."</td>

      </tr>

      </table>");

    $mail->addaddress('designinnovacia32@gmail.com', 'Support');

    $mail->addaddress('contact@designinnovacia.com', 'Karl');

    

    

    if (!$mail->send()) {

      // echo  0;

      echo "<p>There is some problem in sending email</p>";

    } else {

      // echo  1;

      echo "<p class='p thank-msg'>Thanks for being Awesome! <br>We have received your message and would like to thank you for writing to us.</p>";

    ?>

<script>

setTimeout(function() {

    window.location.href = 'thank-you.php';

}, 30000);

</script>

<?php

    }

}



// echo $data;



?>



?>