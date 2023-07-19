<?php
$first_name = $_POST['fName'];
$last_name = $_POST['lName'];
$email_address = $_POST['email'];
$comments = $_POST['comments'];
function filter_email_header($form_field) {  
	return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
	}
	$headers = "From: $email_address";
$sent = mail('leocapp112@gmail.com', 'Feedback Form Submission', $comments, $headers);
if ($sent) {

	?><html>
	<head>
	<title>Thank You</title>
	</head>
	<body>
	<h1>Thank You</h1>
	<p>Thank you for your feedback.</p>
	</body>
	</html>
	
	<?php
	
	} else {
	?><html>
	<head>
	<title>Something went wrong</title>
	</head>
	<body>
	<h1>Something went wrong</h1>
	<p>We could not send your feedback. Please try again.</p>
	</body>
	</html>
	<?php
	}
	?>
	<?php

#Receive user input
$first_name = $_POST['fName'];
$last_name = $_POST['lName'];
$email_address = $_POST['email'];
$feedback = $_POST['comments'];

#Filter user input
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$email_address  = filter_email_header($email_address);

#Send email
$headers = "From: $email_address";
$sent = mail('leocapp112@gmail.com', 'Feedback Form Submission', $comments, $headers);

#Thank user or notify them of a problem
if ($sent) {

?><html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for your feedback.</p>
</body>
</html>
<?php

} else {

?><html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>We could not send your feedback. Please try again.</p>
</body>
</html>
<?php
}
?>