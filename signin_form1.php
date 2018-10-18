<?php
    if (isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = "You have received mail";
    $mailFrom = $_POST['email'];
    $mailTo = "support@etspork.com";

    /*$headers = "MIME-VERSION: 1.0" . "\r\n";
    $headers .= ";charset=UTF-8" . "\r\n";
    $headers .= "From: <$mailFrom> \r\n";
    */

$headers = "From: <$mailFrom>\r\n"; 
$headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "X-MSMail-Priority: High; charset=iso 8859-1"; 
$txt = "You have received an e-mail from " .$firstname. " " . $lastname . ".\n\n";
    
mail($mailTo, $subject, $txt, $headers, "-f$mailFrom");


header("Location: index.php?mailsent");

    }
    
?>
 