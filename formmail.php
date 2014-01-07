<?php

$to = "eh222rz@student.lnu.se";
$from = $_POST["email"];
$subject = $_POST["subject"];
$name = $_POST["name"];
$message = $_POST["message"];

if (mail ($to, $subject, $message ,"From: $name <$from>"))

echo nl2br("<h2>Ditt meddelande har skickats!</h2> 
<b>mottagare:</b> $to
<b>ämne:</b> $subject
<b>meddelande:</b>
$message
");

else
echo "Det gick inte att skicka ditt meddelande";

?>