<?php
//print "stigao si\n";
//print $_GET['fname']; // _POST ili _REQUEST - tada ce probati i sa GET i sa POST
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$region = $_POST['region'];
$city = $_POST['city'];
$spam = $_POST['spam'];
$comment = $_POST['comment'];
print "$first_name $last_name $region $city $spam $comment \n";
?>