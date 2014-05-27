<?php
include('assets/includes/top.inc');
?>

<title>Contact Arrow Photography</title>
<?php
include('assets/includes/header.inc')
?>
<h2>Contact Arrow Photography</h2>
<?php
    if(isset($_GET['submit'])){
        require_once('mail-class.php');
        $contact = new mailClass();
        $contact->sendEmail();

        if(!empty($contact->response)){
            echo $contact->response;
        };
    }

?>

<form action="contact-class.php" method="get" id="contact-form">
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
</form>

<?php
include('assets/includes/footer.inc');
?>