<?php
$db = mysqli_connect('localhost','root','','travel');
if(isset($_POST['goa'])) {
	$que="SELECT * FROM `information` WHERE pname='Goa'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['kerala'])) {
	$que="SELECT * FROM `information` WHERE pname='Kerala'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['mysore'])) {
	$que="SELECT * FROM `information` WHERE pname='Mysore'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['ladakh'])) {
	$que="SELECT * FROM `information` WHERE pname='Ladakh'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['agra'])) {
	$que="SELECT * FROM `information` WHERE pname='Taj Mahal'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['india_gate'])) {
	$que="SELECT * FROM `information` WHERE pname='India Gate'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['hampi'])) {
	$que="SELECT * FROM `information` WHERE pname='Hampi'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['rajasthan'])) {
	$que="SELECT * FROM `information` WHERE pname='Rajasthan'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['manali'])) {
	$que="SELECT * FROM `information` WHERE pname='Manali'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['srinagar'])) {
	$que="SELECT * FROM `information` WHERE pname='Srinagar'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['amritsar'])) {
	$que="SELECT * FROM `information` WHERE pname='Amritsar'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['jogfalls'])) {
	$que="SELECT * FROM `information` WHERE pname='Jog Falls'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['search_p'])) {
	$search = $_POST['search_p'];
	$que="SELECT * FROM `information` WHERE pname='$search'";
	$result = mysqli_query($db, $que);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/info.css">
	<title>Information</title>
	<style>
		body{
	background-color: rgb(23 17 38);
	background-size: 100% 100%;
	background-attachment: fixed;
	background-repeat: no-repeat;
	margin: 0;
	height:90.8vh;
	padding: 0;
}
.main{
  overflow: hidden;
  position: fixed;
  background-color:rgb(100 144 163/77%);
  top: 0;
  width: 100vw;
  height: 8vh;
  max-width: 1550px;
}

ul{
  list-style-type: none;
  margin-top: 20px;
  margin-right: 50px;
}

ul li{
  display: inline;
}

.list{
  position: fixed;
  display: block;
  top: 9px;
  float: left;
}

.list li.logo img{
  position: relative;
  float: left;
  top: -20px;
  margin-left: -5%;
  -webkit-animation:spin 4s linear infinite;
  -moz-animation:spin 4s linear infinite;
  animation:spin 4s linear infinite;

}

.list input[type=image]{
  position: relative;
  float: right;
  top:-50px;
  left: 2%;
  margin-left: 20%; 
  padding: 4px;
  border-radius: 10px;
  border: 1px solid #00f;
  transition: 0.6s ease;
  background-color: #fff;
}

.list input[type=image]:hover{
  background-color: #739ac5;
}

.list2{
  position: relative;
  top: -20px;
  float: right;
}

.list2 li a{
  text-decoration: none;
  color: #fff;
  padding: 5px 20px;
  border: 1px solid transparent;
  transition: 0.9s ease;
}

.list2 li a:hover{
  background-color: #fff;
  color: #000;

}
.hedder{
  margin-top: 5%;
  font-size: 20px;
  text-align: center;
}

.container{
  background-color:rgb(24 24 49);
  width: 85vw;
  height: 112.0vh;
  padding-left:30px;
  padding-right:30px;
  
}
.description-container{
  width: 80vw;
  height: 65vh;
  margin: 6% 3%;
  display:flex;
  	
}
.container .box1{
	padding: 30px;
	float: left;
	overflow: hidden;
	width: 400px;
	height: 500px;
	box-sizing: border-box;
	display: inline-block;
}
.container .description h1{
	text-align: center;
}
.container{
	margin: 0px 40px;
	font-size: 1px;
}
.container .description{
	width: 50vw;
	float: right;

}
.description{
	width: 50vw;
	float: right;
	margin:0px 20px;
	font-size:15px;
	color:White;
}
.container .description-container a{
	position: relative;
	text-decoration: none;
	border: 1px solid #fff;
	border-radius: 8px;
	padding: 7px 12px;
	color: #fff;
	top: 5px;
	margin-top:20px;
	transition: 0.6s ease;
}

.container a:hover{
	background-color: #fff;
	color: #000;
}
.container .image-container{
	width: 80vw;
	height: 44vh;
	margin: -5% 3%;
	display: flex;
}
.container .image-container .box{
	overflow: hidden;
	width: 340px;
	height: 240px;
	margin: 12px 30px;
	box-sizing: border-box;
	display: inline-block;
	transition: transform 2s;
}
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }
		</style>
</head>
<body>
	<div class="main">
	    <ul style="background-color:skyblue;">
	      <ul class="list">
	        <li class="logo">
				<a href="mainPage.html">
					<img src="earth-globe.png" alt="Logo" style="width:36px;height:36px">
				</a></li>
	      </ul>
	      <ul class="list2">
	        <li><a href="mainPage.html">Home</a></li>
	        <li><a id="long" href="destination.html">Destination</a></li>
	        <li><a href="gallery.html">Gallery</a></li>
			<li><a href="logout.html">Logout</a></li>
	      </ul>
	    </ul>
	</div>
	<div class="hedder">
		<h1 style="color:white;">Place Information</h1>
	</div>
	<div class="container">
		<div class="description-container" style="border: 1px solid white;">
			<div class="box1">
				<?php
					while($rows = mysqli_fetch_assoc($result))
					{
				?>
				<img src="<?php echo $rows['pi_main']; ?>" alt="Image" style="width: auto;height: 302px;">
			</div>
			<div class="description">
				<h1><?php echo $rows['pname']; ?><h1>
				<p style="font-size:16px;"><?php echo $rows['pdescription']; ?></p>
				<p> <b style="color:yellow; top: -10px; ">Package: <?php echo $rows['package']; ?> Rs</b></p>
				<p>  <a href="booking.html" style="top: -20px;float: right; margin-right:38%; ">Book Tour</a>
				 </p>
			</div>
		</div>
		<div class="image-container" style="border: 1px solid white">
			<div class="box">
		        <div class="imgBox">
		          <img src="<?php echo $rows['pi1']; ?>" alt="Image" style="width: auto;height: 270px;">
		        </div>
	        </div>
	      <div class="box">
	        <div class="imgBox">
	          <img src="<?php echo $rows['pi2']; ?>" alt="Image" style="width: auto;height: 270px;">
	        </div>
	      </div>
	      <div class="box">
	        <div class="imgBox">
	          <img src="<?php echo $rows['pi3']; ?>" alt="Image" style="width: auto;height: 270px;">
	        </div>
	        	<?php
					}
				?>
	      </div>
		</div>
	</div>
</body>
</html>