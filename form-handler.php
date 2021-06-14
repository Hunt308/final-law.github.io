<?php

// variables to store the information and name tags from html

$name = $_POST['name'];
$vistor_email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Email of the website like domain name

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

//Use double quotes for the variables and what you will get in the email
// \n is a new line
$email_body = "User Name: $name.\n".
               "User Email: $vistor_email.\n".
               "Number: $number.\n".
               "Subject: $subject.\n."
               "User Message: $message.\n";




// Where you want to recieve the email 
 $to = 'mskauttu@law-station.com'

 // what you will see in the email

 $headers = "From: $email_from \r\n";

 $headers .= "Reply-To: $vistor_email \r\n";


// Send data

mail($to, $email_subject, $email_body, $headers);

//Where you will send the user back (you could make a seprate page for where it says thank you for submission like with netlify)

header("Location: contact.html");

?>