<?php
/* Mail Script Page */

// Set SMTP Mail server to send Email, local testing only remove in production
ini_set('SMTP','mail.british-study.com'); //TODO Remove When Deployed

// Check to see if form has been submitted if not redirect back to form

include('assets/includes/top.inc');
echo '<title>Comment Form Feedback</title>';
include('assets/includes/header.inc');
if(!isset($_GET['submit'])){


    echo '<h2>Arrow Media Contact</h2>
<form action="redux.php" method="get" id="contact-form">
    <p>
        <label for="name">Contact Name</label>
        <input type="text" name="name" required>
    </p>
    <p>
        <label for="email">Email Address</label>
        <input type="email" name="email" required>

    </p>
    <p>
        <label for="gender">Gender</label>
        Male:
        <input type="radio" name="gender" value="male" checked>
        Female:
        <input type="radio" name="gender" value="female">

    </p>
    <p>
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment" rows="8" cols="18"></textarea>
    </p>
    <p>
        <label>&nbsp;</label>
        <input type="submit" name="submit" value="Send Comment">
    </p>
</form>';
}
else{

// collect data from form

    $name = $_GET['name'];
    $email = $_GET['email'];
    $gender =
        $_GET['gender'];
    $comment =
        $_GET['comment'];


// process data to form variable that can be mailed: $to, $subject, $message and $headers

//Send Data
    $to =
        "sonic696@gmailcom";
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



//If data sent ok say Thankyou
    if(mail($to,$subject,$message, $headers)){



        echo '<h2>Thankyou for your Comment</h2>';



// If Data not sent say there's a problem
    }
    else {
        echo '<h2>Sorry There has been a problem</h2>';
    }

}
include('assets/includes/footer.inc');






?>