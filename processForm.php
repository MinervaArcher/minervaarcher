<?php

define( "RECIPIENT_NAME", "MinervaArcher.com Site Mail" );
define( "RECIPIENT_EMAIL", "minerva@minervaarcher.com" );
define( "EMAIL_SUBJECT", "Email from MinervaArcher.com" );

$success = false;
$name = isset( $_POST['name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name'] ) : "";
$email = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

if ( $name && $email ) {
	$recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
	$headers = "From: " . $name . " <" . $email;
		if ( $message ) {
			$headers = $headers."\n Notes:".$message;
		}
	$success = mail( $recipient, EMAIL_SUBJECT, $headers );
}

if ( isset($_GET["ajax"]) ) {
  echo $success ? "success" : "error";
} else {
?>
<html>
  <head>
    <title>Thanks</title>
  </head>
  <body>
  <?php if ( $success ) echo "<p>Thanks! I'll get back to you as soon as I can.</p>" ?>
  <?php if ( !$success ) echo "<p>There was a problem sending your message. Please try again.</p>" ?>
  <p>Click your browser's Back button to return to the page.</p>
  </body>
</html>
<?php
}
?>


