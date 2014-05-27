<?php
/* Mail Script Page */

// Set SMTP Mail server to send Email, local testing only remove in production
  ini_set('SMTP','mail.british-study.com'); //TODO Remove When Deployed

// Check to see if form has been submitted if not redirect back to form
if(!isset($_GET['submit'])){

        header('location: contact.php');
    }else{

// collect data from form

$name = $_GET['name'];
$email = $_GET['email'];
$gender =
    $_GET['gender'];
$comment =
    $_GET['comment'];


// process data to form variable that can be mailed: $to, $subject, $message and $headers


$to =
    "sonic696@gmail.com";
$subject =
    'Web site comment';
/*$message =
    "$name has sent a comment they are $gender and they commeted that $comment";*/
$message =
    $name.' has sent a comment they are '.$gender.' and they commeted that '.$comment;

   /* $message = $name;
    $message .= ' has sent a comment they are ';
    $message .=$gender;
    $message .=' and they commeted that ';
    $message .=$comment; */

$headers =
    "From: $email";
    "BCC: $email";

//Send Data

if(mail($to,$subject,$message, $headers)){

    include('assets/includes/top.inc');
    echo '<title>Comment Form Feedback</title>';
    include('assets/includes/header.inc');

    echo '<h2>Thankyou for your Comment</h2>';

    include('assets/includes/footer.inc');


}
else {
    echo '<h2>Sorry There has been a problem</h2>';
}

}
else{
    header('location: contact.php');
}

//If data sent ok say Thankyou

// If Data not sent say there's a problem

?>