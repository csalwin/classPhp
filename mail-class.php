<?php class mailClass{
    public $name;
    public $email;
    public $gender;
    public $comment;
    public $to;
    public $subject;
    public function __construct(){
/* Mail Script Page */

// Set SMTP Mail server to send Email, local testing only remove in production
  ini_set('SMTP','mail.british-study.com'); //TODO Remove When Deployed



// collect data from form

$this->name = $_GET['name'];
$this->email = $_GET['email'];
$this->gender = $_GET['gender'];
$this->comment = $_GET['comment'];
}

// process data to form variable that can be mailed: $to, $subject, $message and $headers
public function sendEmail(){
//Prepare to send Email


$this->to = "sonic696@gmail.com";
$this->subject = 'Hi mate';
$this->headers ="From: $this->email";

    /*$message =
    "$name has sent a comment they are $gender and they commeted that $comment";*/
$this->message = $this->name.' has sent a comment they are '.$this->gender.' and they commeted that '.$this->comment;

   /* $message = $name;
    $message .= ' has sent a comment they are ';
    $message .=$gender;
    $message .=' and they commeted that ';
    $message .=$comment; */




//Send Data

if(mail($this->to,$this->subject,$this->message, $this->headers)){

    $this->response = '<h2>Thankyou for your Comment we will contact you shortly</h2>';

}
else {
   $this->response = '<h2>Sorry There has been a problem. Please <a href="javascript:history.back()">try again</a> </h2>';
}
    return $this->response;



//If data sent ok say Thankyou

// If Data not sent say there's a problem
}
}
?>