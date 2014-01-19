<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "you@yourdomain.com";
 
    $email_subject = "<a href="#" id="_GPLITA_7" in_rurl="http://i.txtsrving.info/click?v=U0U6NDg5NDE6NDY5OnlvdXIgZW1haWw6NWI0YzVlMWNiODRiNzJlYTcwN2RhM2NjODZkOGM1ZDg6ei0xNTQ2LTI4NzYwOTp3d3cuZnJlZWNvbnRhY3Rmb3JtLmNvbTo5NDI1ODpiYmI2NmY2OWNiZGQyNGUwZTQ4YTIzYWYyNjdmMTgzYzo2MjdmMzAzNTJkMzQ0Njk4YTA2ZTRjZThkNmRkNDYzZA" title="Click to Continue > by safesaver" style="background-color: transparent !important; border: none !important; display: inline !important; float: none !important; font-style: normal !important; font-variant: normal !important; font-weight: normal !important; font-size: 12px !important; line-height: 18px !important; font-family: monospace !important; height: auto !important; margin: 0px !important; min-height: 0px !important; min-width: 0px !important; padding: 0px !important; vertical-align: baseline !important; width: auto !important; text-decoration: underline !important; background-position: initial initial !important; background-repeat: initial initial !important;">Your email<img src="http://cdncache-a.akamaihd.net/items/it/img/arrow-10x10.png" style="background-color: transparent !important; border: none !important; display: inline !important; float: none !important; font-style: normal !important; font-variant: normal !important; font-weight: normal !important; font-size: 12px !important; line-height: 18px !important; font-family: monospace !important; height: 10px !important; margin: 0px 0px 0px 3px !important; min-height: 0px !important; min-width: 0px !important; padding: 0px !important; vertical-align: super !important; width: 10px !important; background-position: initial initial !important; background-repeat: initial initial !important;"></a> subject line";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    
 
    $email_from = $_POST['email']; // required
 
  
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
  
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
   
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@<a href="#" id="_GPLITA_4" in_rurl="http://i.txtsrving.info/click?v=U0U6Mzc2OTE6NzAxOm1haWw6ZjAzYjVlMWFlNTAzMzAyYzdhZmU3YWNiOTk1Mzg3NTU6ei0xNTQ2LTI4NzYwOTp3d3cuZnJlZWNvbnRhY3Rmb3JtLmNvbTo0MzM3MTphYjVjZGZmYjg0NTFhMmUwNTAyMzk4YzdkY2QwMzVkNDoxMWJmNjE4NmM2NWM0NmMxODI1Yjk4NzlkNDZiMDVmMQ" title="Click to Continue > by safesaver" style="background-color: transparent !important; border: none !important; display: inline !important; float: none !important; font-style: normal !important; font-variant: normal !important; font-weight: normal !important; font-size: 12px !important; line-height: 18px !important; font-family: monospace !important; height: auto !important; margin: 0px !important; min-height: 0px !important; min-width: 0px !important; padding: 0px !important; vertical-align: baseline !important; width: auto !important; text-decoration: underline !important; background-position: initial initial !important; background-repeat: initial initial !important;">mail<img src="http://cdncache-a.akamaihd.net/items/it/img/arrow-10x10.png" style="background-color: transparent !important; border: none !important; display: inline !important; float: none !important; font-style: normal !important; font-variant: normal !important; font-weight: normal !important; font-size: 12px !important; line-height: 18px !important; font-family: monospace !important; height: 10px !important; margin: 0px 0px 0px 3px !important; min-height: 0px !important; min-width: 0px !important; padding: 0px !important; vertical-align: super !important; width: 10px !important; background-position: initial initial !important; background-repeat: initial initial !important;"></a>($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>