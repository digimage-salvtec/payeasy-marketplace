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

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $identityNumber = $_POST['identityNumber'];
    $phoneNumber = $_POST['phoneNumber'];
    $emailAddress = $_POST['emailAddress'];
    $physicalAddress = $_POST['physicalAddress'];
    $companyName = $_POST['companyName'];
    $designation = $_POST['designation'];
    $incomeAmount = $_POST['incomeAmount'];
    $employerContact = $_POST['employerContact'];
    $reasonForLoan = $_POST['reasonForLoan'];
    $fsp = $_POST['fsp'];

    if (empty($firstName)) {
        $errors[] = 'First name is required';
    }

    if (empty($lastName)) {
        $errors[] = 'Last name is required';
    }

    if (empty($identityNumber)) {
        $errors[] = 'National ID is required';
    }

    if (empty($phoneNumber)) {
        $errors[] = 'Phone number is required';
    }

    if (empty($emailAddress)) {
        $errors[] = 'Email address is required';
    } else if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address';
    }

    if (empty($physicalAddress)) {
        $errors[] = 'Physical address is required';
    }

    if (empty($companyName)) {
        $errors[] = 'Company name is required';
    }

    if (empty($designation)) {
        $errors[] = 'Your position / designation is required';
    }

    if (empty($incomeAmount)) {
        $errors[] = 'Income amount is required';
    }

    if (empty($employerContact)) {
        $errors[] = 'Your employer contact is required';
    }

    if (empty($reasonForLoan)) {
        $errors[] = 'Please select a reason for your loan application';
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
            $mail->setFrom('marketplace@epaynetsz.com', 'PayEasy Marketplace');
            $mail->addAddress($emailAddress);
            //$mail->addCC('marketplace@epaynetsz.com');

            // contents
            $mail->isHTML = true;
            $mail->Subject = 'Loan Application from ' . $firstName . ' ' . $lastName;
            $mail->Body = "New Loan Application \r\n";
            $mail->Body .= "Full name: " . $firstName . " " . $lastName . "\n";
            $mail->Body .= "National ID No.: " . $identityNumber . "\n";
            $mail->Body .= "Cell / Tel. : " . $phoneNumber . "\n";
            $mail->Body .= "Email Address: " . $emailAddress . "\n";
            $mail->Body .= "Physical Address: " . $physicalAddress . "\n";
            $mail->Body .= "Applicant Employer: " . $companyName . "\n";
            $mail->Body .= "Applicant Designation: " . $designation . "\n";
            $mail->Body .= "Income Amount (Net): " . $incomeAmount . "\n";
            $mail->Body .= "Employer Contact: " . $employerContact . "\n";
            $mail->Body .= "Reason for loan application: " . $reasonForLoan . "\n\n";
            $mail->Body .= "Preferred FSP: " . $fsp . "\n";

            // send the message
            if ($mail->send()) {
                header('Location: thank-you.html');
            } else {
                $errorMessage = "Oops, we encountered an error sending the message!";
            }
        } catch (Exception $e) {
            echo "Unknown error occured, please try that again!";
            echo "Error: " . $mail->ErrorInfo;
        }
    }
}
