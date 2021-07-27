<?php 
if(isset($_POST['submit'])){
    $to = "info@medport.london";

    $name = $_POST['name'];
    $sender = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $subject = "Contact Form";
    $body = "<html><body><b>From:</b> " . $name . "<br><b>Their email:</b> " . $sender . "<br><b>Their number:</b> " . $number . "<br><br>" . $message . "</body></html>";

    $headers = "From:" . $sender . "\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    mail($to, $subject, $body, $headers);
    header('Location: ../ThankYou.html');
} else {
    echo "fail";
}
?>