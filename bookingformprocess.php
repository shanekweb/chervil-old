<?php

/* Subject and Email Variables */

	$emailSubject = 'bookingformprocess!';
    $webMaster = 'cherville.bed@gmail.com';

/* Gathering Data Variables */

	$name = $_POST['name'];
    $email = $_POST['email'];   
	$phone = $_POST['phone'];
    $address = $_POST['address'];
    $rooms = $_POST['rooms'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $nights = $_POST['nights'];
    $comments = $_POST['comments'];
    
    $body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Phone: $phone <br>
Address: $address <br>
Rooms: $rooms <br>
Adults: $adults <br>
Children: $children <br>
Check in Date: $day / $month / $year <br>
Nights: $nights <br>
Comments: $comments <br>
EOD;

	$headers = "From: $email\r\n";
    $headers .= "Content-type: text/html\r\n";
    $success = mail($webMaster, $emailSubject, $body, $headers);
    
/* Results Rendered as HTML */

 	$theResults = <<<EOD
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cherville B&B Thank You Page</title>
<meta http-equiv="refresh" content="3;URL=http://cherville-bedandbreakfast.com/">
<link href="style.css" rel="stylesheet" type="text/css" />
</head>


<body>
<div id="wrapper">

<div id="header"><img src="images/Header01 (2).png" border="0" /></a></div><!--closeheader-->

<div id="nav">

<ul>
<li><a href="index.html">Home</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="location.html">Location</a></li>
<li><a href="reviews.html">Reviews</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="booking.html">Booking</a></li>
<li><a href="rooms.html">Rooms</a></li>

</ul>

</div><!--closenav-->

<div id="contentthankyou">
<h2>Thank you for your enquiry, we will get back to you as soon as possible.</h2>
</div><!--closecontent-->

<div id="footerleft">
Shane K Design, 2011<br />
www.skd.me
</div><!--closefooterleft-->

<div id="footercentre">
Cherville Bed & Breakfast, Drumalee, Cavan town<br />
Artwork & Interior Design by Georgina
</div><!--closefooter-->

<div id="footerright">
Phone: 049 4372855<br />
E-mail: cherville.bedandbreakfast@gmail.com
</div><!--closefooterright-->

</div><!--closewrapper-->
</body>

</html>
EOD;
echo "$theResults";

?>