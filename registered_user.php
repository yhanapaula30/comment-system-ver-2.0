<!DOCTYPE html>
<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"/>
        <title>ChatBOX</title>
<body background="chatbox-logo.jpg">
    </head>

<h2 style="text-align:center; color:BLUE"><i>UzZap: The Social Media Chatbox Center</font></h5></i>
<br><br>










<?php

include 'comments.class.php';


$db_details = array(
	'db_host' => 'localhost',
	'db_user' => 'root',
	'db_pass' => '',
	'db_name' => 'test'
	);

$page_id = 1;

$settings = array(
	'public' => 0,
	'user_details' => array(
		'name' => 'yhana',
		'email' => 'leyanapaulabulanhagui@yahoo.com'
		)
	);

$comments = new Comments_System($db_details, $settings);

$comments->grabComment($page_id);

if($comments->success)
	echo "<div class='alert alert-success' id='comm_status'>".$comments->success."</div>";
else if($comments->error)
	echo "<div class='alert alert-error' id='comm_status'>".$comments->error."</div>";

// a simple form
echo $comments->generateForm();

// we show the posted comments
echo $comments->generateComments($page_id); // we pass the page id



?>
