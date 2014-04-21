<?php

// Name
$name ="$name"; 

// Email
$email="$email";

// Message
$text="$text"; 

// Enter your email address
$to ='me@mgshuheb.com';
$send_contact=mail($to,$name,$email,$text);

// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "Thankyou for your message!";
}
else {
echo "ERROR";
}
?>