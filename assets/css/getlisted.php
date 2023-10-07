<?php

$errors = [];

if (!empty($_POST)) {
   $CompanyName = $_POST['CompanyName'];
   $phoneNumber = $_POST['phoneNumber'];
   $email = $_POST['email'];
   $physicaladdress = $_POST['physicaladdress'];
   $date= $_POST['date'];
   $AboutItem= $_POST['AboutItem'];
  
   if (empty($firstname)) {
       $errors[] = 'firstname is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($reason)) {
       $errors[] = 'Message is empty';
   }
}