<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'kontakt@auto-hartmann.de';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "Folgende Anfrage wurde über das Kontaktformular abgesendet:
	Name:  $_POST[name]
	E-Mail: $_POST[email]
	Message: $_POST[message]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Anfrage ueber Homepage', $body, $headers );

}

// otherwise, let the spammer think that they got their message through

?>

header('Location: http://www.auto-hartmann.de/danke.html');
exit('Weiterleitung zu http://www.auto-hartmann.de/danke.html');