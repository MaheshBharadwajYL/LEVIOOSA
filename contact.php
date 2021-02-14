<?php
if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["mobile"]) && isset($_GET["message"])){
$userfullname=$_GET["name"]; $useremail=$_GET["email"]; $usermobile=$_GET["mobile"]; $usermessage=$_GET["message"];

/*PUSH USER DETAILS TO YOUR MAIL*/
$to = "support@Levioosa.com";
$subject = "User Queries";
$txt = "Username: $userquery \r\n Email: $useremail \r\n Contactno: $usermobile \r\n Message: $usermessage";
$headers = "From: Support@Levioosa.com" . "\r\n" .
"CC: Support@Levioosa.com";

/*ON SUCCESSFULL PUSH TRIGGER MAIL TO USER*/
if(mail($to,$subject,$txt,$headers)){
$to = "$useremail";
$subject = "Submission Sucessfull";
$txt = "Dear $userquery, \r\n Thanks for contacting us. Your query will be answered within 24hrs.";
$headers = "From: Support@Levioosa.com" . "\r\n" .
"CC: Support@Levioosa.com";
}

/*ON UNSUCCESSFULL PUSH POPUP FAILURE MESSAGE & ROLLBACK*/
else{
echo"
<script>
alert('Please try after some time');
window.location.href='index.html';
</script>
";
}
}

/*DISABLE DIRECT PAGE ACCESS*/
else{
header('Location: index.html');
}
?> 
