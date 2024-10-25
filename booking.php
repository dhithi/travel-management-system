<?php

$con=mysqli_connect('localhost','root','','travel');

$firstname=$_POST['ffirst'];
$lastname=$_POST['flast'];
$email=$_POST['femail'];
$city=$_POST['city'];
$phone=$_POST['fphone'];
$destination=$_POST['fdesti'];


$sql="INSERT INTO `booking` (`ffirst`,`flast`,`femail`,`city`,`fphone`,`fdesti`)
 VALUES ('$firstname','$lastname','$email','$city','$phone','$destination')";
$result = mysqli_query($con,$sql);

if(isset($_POST['submit'])){
	header('location:payment.html');
}
?>