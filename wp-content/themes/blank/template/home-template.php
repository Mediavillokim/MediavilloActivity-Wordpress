<?php
	/* Template Name: HOME */
	
?>


<!DOCTYPE html>
<html>
<head>
	<style>
		body{
		background-image: url(http://localhost/wordpress/wp-content/uploads/2021/04/pic1.jpg);
		background-size:100%;
		background-repeat: no-repeat;
		margin:;
		}
ul{
	list-style-type: none;
	margin: 0;
	padding: 0;
	width: 100%;
	height: 0%;
	font-size: 200 pt;
	position: auto;
	background-color: rgba(250,230,159,026);

}		

li a{
	text-decoration: none;
	color: white;
	font-family: "ks hand";
	font-size: 20 pt;
	padding: 50px 80px;
	display:white;
	margin-top: 50 px;

}

li a:hover{
	background-color: white;
	color:gray;

}
li{
	float: right;
}
</style>
<title>HOMEPAGE</title>
</head>
<body>

	<div style = "position: absolute; top: 35px; left: 30px; font-size: 30pt; color:white; font-family: buxton sketch"> PRETTY GAL CLOTHING </div>

	<div style = "position: absolute; top: 210px; right: 450px; font-size: 60pt; color: black; font-family: bookshelf symbol7"> SHOP NOW! 
	</div>
	<div style = "position: absolute; top: 300px; right: 600px; font-size: 15pt; color: black; font-family: bookshelf symbol7"> MUST HAVE ITEMS! 
	</div>
	<div style = "position: absolute; top: 600px; right: 1150px; font-size: 15pt; color: black; font-family: bookshelf symbol7"> CROP SWEATER
	</div>
	<div style = "position: absolute; top: 600px; right: 850px; font-size: 15pt; color: black; font-family: bookshelf symbol7"> PINK SWEATER
	</div>
	<div style = "position: absolute; top: 600px; right: 550px; font-size: 15pt; color: black; font-family: bookshelf symbol7"> SKIRT
	</div>
	<div style = "position: absolute; top: 600px; right: 250px; font-size: 15pt; color: black; font-family: bookshelf symbol7"> STRIPES
	</div>
	<div style = "position: absolute; top: 640px; right: 700px; font-size: 10pt; color: black; font-family: bookshelf symbol7"> STAY CONNECTED
	</div>

	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/girl.jpg" width = "230" height = "200" style="position:absolute; top: 380px; right: 1100px">
	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/GIRL2.jpg" width = "230" height = "200" style="position:absolute; top: 380px; right: 800px">
	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/GIRL3.jpg" width = "230" height = "200" style="position:absolute; top: 380px; right: 500px">
	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/GIRL4.jpg" width = "230" height = "200" style="position:absolute; top: 380px; right: 200px">
	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/FACEBOOK.jpg" width = "50" height = "30" style="position:absolute; top: 660px; right: 780px">
	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/INSTA.jpg" width = "50" height = "30" style="position:absolute; top: 660px; right: 730px">
	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/TWIT.jpg" width = "50" height = "30" style="position:absolute; top: 660px; right: 680px">
<ul>
<li><a href="Cart">CART</a></li>
<form action="[woocommerce_cart]" method = "post">
<li><a href="SHOP">SHOP</a></li>
<form action="content-product.php" method = "post">
<li><a href="CONTACT">CONTACT US</a></li>
<form action="contact-template.php" method = "post">
<li><a href="ABOUT">ABOUT US</a></li>
<form action="about-template.php" method = "post">	
<li><a href="HOME">HOME</a></li>
<form action="home-template.php" method = "post">



</ul>

</body>
</html>

<?php  


?>
