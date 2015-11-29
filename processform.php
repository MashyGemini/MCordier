<?php
  

// Read the form values

$success = false;

$name = isset( $_POST['name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name'] ) : "";

$phone = isset( $_POST['phone'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['phone'] ) : "";

$message = isset( $_POST['message'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['message'] ) : "";


$emailErr = "";
 
         
$email = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
         

 
 
// Email format
$msg = "
 
<html>
 
<body style=\" background-color:#efefef; font-family: arial, helvetica, sans-serif; \">
<table width=\"600\" border=\"0\" bordercolor=\"#ffffff\" align=\"center\" cellpadding=\"10\" cellspacing=\"10\" bgcolor=\"#ffffff\" style=\"padding:0 20px;\">
 
    <tr>
        <td colspan=\"2\"><h2>$formTitle</h2></td>
    </tr>
    <tr>
        <td colspan=\"2\" style=\"border-bottom:1px solid #898989;\">The following visitor would like you to contact them.</td>
    </tr>
    <tr>
        <td width=\"30%\" style=\"border-bottom:1px solid #898989;\">Name:</td>
        <td width=\"60%\" style=\"border-bottom:1px solid #898989; text-transform:capitalize\">$name</td>
    </tr>
    <tr>
        <td width=\"30%\" style=\"border-bottom:1px solid #898989;\">Tel:</td>
        <td width=\"60%\" style=\"border-bottom:1px solid #898989; \">$phone</td>
    </tr>
    <tr>
        <td width=\"30%\" style=\"border-bottom:1px solid #898989;\">Email:</td>
        <td width=\"60%\" style=\"border-bottom:1px solid #898989;\">$email</td>
    </tr>
    <tr>
        <td width=\"30%\" style=\"border-bottom:1px solid #898989;\">Message:</td>
        <td width=\"60%\" style=\"border-bottom:1px solid #898989;\">$message</td>
    </tr>
    <tr>
        <td colspan=\"2\">&nbsp;</td>
    </tr>
 
</table>
</body>
</html>
";
 
 
 
// If all values exist, send the email
if ( $name && $email && $phone ) {
  $to = "mache.cordier@gmail.com";
  $subject = $_POST['name'];
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= "From:" . $email . "\r\n";
  $success = mail($to, $subject, $msg, $headers);
}
 
 
 
// Return an appropriate response to the browser
if ( isset($_GET["ajax"]) ) {
  echo $success ? "success" : "error";
} else {
/* Redirect browser */
    header("Location: thanks.html");
/* Make sure that code below does not get executed when we redirect. */
}
?>