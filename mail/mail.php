<?php 
//input
$fullnames = $_POST['cname'];
$email = $_POST['email'];
$message_1 = $_POST['message'];

//check if empty
if(strlen($fullnames) == "" || strlen($email) == "" || strlen($message_1) == "")
{
    echo "301";
    exit;
}

//end of input


function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = 'kevin92makau@gmail.com';
$subject = 'New email from ('.$fullnames. ')';
$message = $message_1;
$headers = 'From: '.$email;
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "102";
} else { //send email 
    mail($to_email, $subject, $message, $headers);
    echo "100";
}
 
 

?>