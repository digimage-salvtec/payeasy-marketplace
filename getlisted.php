<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

try{
    $mail = new PHPMailer(true);
    $errors = [];
        
    if (!empty($_POST)) {
        
       $companyName = $_POST['companyName'];
       $businessCategory = $_POST['businessCategory'];
       $emailAddress = $_POST['emailAddress'];
       $telephone = $_POST['telephone'];
       $mobile = $_POST['mobile'];
       $physicalAddress = $_POST['physicalAddress'];
       $description = $_POST['description'];
      
    }
    
    // server settings
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'mail.epaynetsz.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'marketplace@epaynetsz.com';
    $mail->Password = 'X)9oeO(V-DM$';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';
    
    // reciepients
    $mail->setFrom('marketplace@epaynetsz.com', 'Get listed - PayEasy Marketplace');
    $mail->addAddress('digimage@salvtec.co.sz');
    $mail->addAddress('marketplace@epaynetsz.com');
    
    // contents
    $mail->isHTML = true;
    $mail->Subject = "New listing request from ".$companyName;
    $mail->Body = "Business details \r\n";
    $mail->Body .= "Company name: ".$companyName."\n";
    $mail->Body .= "Business category: ".$businessCategory."\n";
    $mail->Body .= "Email address: ".$emailAddress."\n";
    $mail->Body .= "Telephone no: ".$telephone."\n";
    $mail->Body .= "Mobile no: ".$mobile."\n";
    $mail->Body .= "Short descriptor: ".$description."\n";
    
    
    // send the message
    $mail->send();
    echo 'Thank you for your interest in Marketplace. We have received your application, and we will contact you shortly.';
    
    //header('Location: index.html');
    //exit();
    
}catch(Exception $e){
    echo "There was an error, please try that again!";
    echo "Error: ".$mail->ErrorInfo;
}
?>
