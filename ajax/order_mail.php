<?php

    $user_ip = $_POST['orderuser_ip'];

    $url = $_POST['orderurl'];

    $package = $_POST['orderpackage'];

    $price = $_POST['orderprice'];

    $name = $_POST['ordername'];

    $email = $_POST['orderemail'];

    $phone = $_POST['orderphone'];

    $message = $_POST['ordermessage'];

  

    // $to = "contact@designinnovacia.com";    

    $to = "ayubabtach22@gmail.com";



    // $to = "contact@designinnovacia.com";

    // $to ="designinnovacia32@gmail.com";



    $subject = "VISIIONARY SOFT ORDER FORM";

    

    

    

 $message = "

   <table cellspacing='10' border='1' style='color:#000;width:100%;'>

      <tr>

        <td style='background-color:#df292a;color:#fff;text-align:center;' colspan='2'><h1>Visionary Soft </h1></td>

      </tr>

      <tr>

        <td style='padding:10px;border-left:4px solid #000000;'>Package Name: </td>

        <td style='padding:10px;border-left:4px solid #000000;'>".$package."</td>

      </tr>

      <tr>

        <td style='padding:10px;border-left:4px solid #000000;'>Package Price:</td>

        <td style='padding:10px;border-left:4px solid #000000;'>".$price."</td>

      </tr>

      <tr>

        <td style='padding:10px;border-left:4px solid #000000;'>Full Name: </td>

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

      <tr>

        <td style='padding:10px;border-left:4px solid #000000;'>User IP:</td>

        <td style='padding:10px;border-left:4px solid #000000;'>".$user_ip."</td>

      </tr>

       <tr>

        <td style='padding:10px;border-left:4px solid #000000;'>URL: </td>

        <td style='padding:10px;border-left:4px solid #000000;'>".$url."</td>

      </tr>

      </table>

    

    ";



 // Always set content-type when sending HTML email

    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    

    // More headers

    $headers .= 'From: VISIONARY SOFT <ayubabtach22@gmail.com>' . "\r\n";

    // $headers .= 'From: RIDGEWOOD GLOBAL SOLUTIONS <test@gmail.com>' . "\r\n";

    

    // solutions@rglobal.co.uk

    // $headers .= 'Cc: myboss@example.com' . "\r\n";

    //designs@rglobal.co.uk

    if(mail($to,$subject,$message,$headers))

    {

       echo "<p class='s-msg'>Thank you for your message. It has been sent.</p>";

    }

    else     

    {

        echo "<p class='ns-msg'>There is some problem in sending email.One or more fields have an error. </p>";

    }



// echo $data;



?>