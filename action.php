<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$errors = [];
$errorMessage = "";

if (!empty($_POST)) {

    $companyName = $_POST['companyName'];
    $businessCategory = $_POST['businessCategory'];
    $emailAddress = $_POST['emailAddress'];
    $telephone = $_POST['telephone'];
    $mobile = $_POST['mobile'];
    $physicalAddress = $_POST['physicalAddress'];
    $description = $_POST['description'];


    if (empty($companyName)) {
        $errors[] = 'The name of your company is required';
    }

    if (empty($businessCategory)) {
        $errors[] = 'Please select a business category';
    }

    if (empty($emailAddress)) {
        $errors[] = 'Email address is required';
    } else if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address';
    }

    if (empty($telephone)) {
        $errors[] = 'Telephone no. is required';
    }

    if (empty($mobile)) {
        $errors[] = 'Mobile no. is required';
    }

    if (empty($physicalAddress)) {
        $errors[] = 'Physical address is required';
    }

    if (empty($description)) {
        $errors[] = 'Please describe what your business does';
    }

    if (!empty($errors)) {
        $allErrors = join('<br>' . $errors);
        $errorMessage = "<p style='color: red'>{$allErrors}</p>";
    } else {
        try {
            // server settings
            $mail->isSMTP();
            $mail->Host = 'mail.epaynetsz.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'marketplace@epaynetsz.com';
            $mail->Password = 'X)9oeO(V-DM$';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = '465';
            // $mail->SMTPDebug = 2;

            // reciepients
            $mail->setFrom('marketplace@epaynetsz.com', 'Get listed - PayEasy Marketplace');
            $mail->addAddress('digimage@salvtec.co.sz');
            $mail->addAddress('marketplace@epaynetsz.com');

            // contents
            $mail->isHTML = true;
            $mail->Subject = "New listing request from " . $companyName;
            $mail->Body = "Business details \r\n";
            $mail->Body .= "Company name: " . $companyName . "\n";
            $mail->Body .= "Business category: " . $businessCategory . "\n";
            $mail->Body .= "Email address: " . $emailAddress . "\n";
            $mail->Body .= "Telephone no: " . $telephone . "\n";
            $mail->Body .= "Mobile no: " . $mobile . "\n";
            $mail->Body .= "Short descriptor: " . $description . "\n";

            // send the message
            if ($mail->send()) {
                header("Location: success.hmtl");
            } else {
                $errorMessage = "<p style='red'>Oops, there was an error. Please try that again... </p>";
            }
        } catch (Exception $e) {
            echo "Unknown error occured, please try that again!";
            echo "Error: " . $mail->ErrorInfo;
        }
    }
}
