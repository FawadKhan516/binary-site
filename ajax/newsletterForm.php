<?php

$errors = [];
$data = [];

// if(isset($_POST['name'])) {

   

  $email = $_POST['email'];

    // $message = $_POST['message']; 

    

    

   

    //  $to="designinnovacia32@gmail.com";

    // $to = "contact@designinnovacia.com";    

    $to = "ayubabtach22@gmail.com";

    // $to = "contact@designinnovacia.com";

    // $to ="designinnovacia32@gmail.com";



    //designs@rglobal.co.uk

    $subject = "Binary Design Hub NEWSLETTER";

    

    $message = "

   <table cellspacing='10' border='1' style='color:#000;width:100%;'>

      <tr>

        <td style='background-color:#408FCA;color:#fff;text-align:center;' colspan='2'><h1>Binary Design Hub NEWSLETTER</h1></td>

      </tr>    

      <tr>

        <td style='padding:10px;border-left:4px solid #000000;'>Email:</td>

        <td style='padding:10px;border-left:4px solid #000000;'>".$email."</td>

      </tr>      

      </table>    

    ";

    

    // Always set content-type when sending HTML email

    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    

    // More headers

    $headers .= 'From: Binary Design Hub <info@binarydesignhub.com>' . "\r\n";

    // $headers .= 'From: RIDGEWOOD GLOBAL SOLUTIONS <test@gmail.com>' . "\r\n";

    

    // solutions@rglobal.co.uk

    // $headers .= 'Cc: myboss@example.com' . "\r\n";

    

    if(mail($to,$subject,$message,$headers))

    {

       echo "<p class='s-msg'>Thank you for your message. It has been sent.</p>";

    }

    else     

    {

        echo "<p class='ns-msg'>There is some problem in sending email.One or more fields have an error. </p>";

    }

    

   // echo $data; 

// }



?>