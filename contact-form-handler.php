<?php

function validate($data): string
{
    return htmlspecialchars(stripslashes($data));
}
$myemail = 'd00263493@student.dkit.ie';// <-----Put your DkIT email address here.

$errors = '';
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['message']) ||
    empty($_POST['phone'] ||
    empty($_POST['request']) ||
    empty($_POST['country'])||
        empty($_POST['city'])||
        empty($_POST['street']) ||
    empty($_POST['pc']) ||
    empty($_POST['county']))
)
{

    $errors .= "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder
$headers = 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = validate($_POST['name']);
$email_address = validate($_POST['email']);
$message = validate($_POST['message']);
$phone = validate($_POST['phone']);
$request = validate($_POST['request']);
$city = validate($_POST['city']);
$street = validate($_POST['street']);
$postal_code = validate($_POST['pc']);
$county = validate($_POST["county"]);

if($county === ""){
    $errors .= "\n Error : Invalid County";
}

if($request === ""){
    $errors .= "\n Error : Please select a request";
}

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error : Invalid email address";
}

if(!preg_match(
    "/^0[0-9]{2} [0-9]{3} [0-9]{4}$/i",$phone
)){
    $errors .="\n Error : Invalid phone number";
}

if(!preg_match("/^[A-Z][0-9]{2} [A-Z0-9]{4}$/i", $postal_code)){
    $errors.="\n Error : Invalid postal code";
}

if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Email: $email_address \n Phone : $phone \n Request : $request \n Address : $street, $city, $postal_code \n Message \n $message";

        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: contact-form-thank-you.php');
}
include "contact.php";
?>
