<?php

$con=mysqli_connect('localhost','root','','travel');

$name=$_POST['fname'];
$email=$_POST['femail'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$cardholder=$_POST['cardholder'];
$cardnumber=$_POST['cardnumber'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];


$sql="INSERT INTO `payment` (`fname`,`femail`,`address`,`city`,`state`,`zip`,`cardholder`,`cardnumber`,`expmonth`,`expyear`,`cvv`)
VALUES ('$name','$email','$address','$city','$state','$zip','$cardholder','$cardnumber','$expmonth','$expyear','$cvv')";
$result = mysqli_query($con,$sql);

if(isset($_POST['submit'])){
	header('location:thanks.html');
}
?>