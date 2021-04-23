<?php
	/* Template Name: ABOUT */

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		body{
		background-image: url(http://localhost/wordpress/wp-content/uploads/2021/04/brown.jpg);
		background-size:50%;
		background-repeat: repeat;
		margin:;
		}
ul{
	list-style-type: none;
	margin: 0;
	padding: 0;
	width: 100%;
	height: 0%;
	font-size: 200 pt;
	position: right;
	background-color: rgba(250,230,250,026);


}		

li a{
	text-decoration: none;
	color: white;
	font-family: "ks hand";
	font-size: 20 pt;
	padding: 50px 80px;
	display: white;
	margin-top: 50 px;

}

li a:hover{
	background-color: lightpink;
	color:black;

}
li{
	float: right;
}




</style>
<title>ABOUT US</title>
</head>
<body>

	<div style = "position: absolute; top: 210px; right: 450px; font-size: 60pt; color: black; font-family: bookshelf symbol7"> ABOUT US! 
	</div>
	<div style = "position: absolute; top: 310px; right: 50px; font-size: 15pt; color: white; font-family: typewriter; text-align: right;"> Pretty Gal Clothing is a local B2C fast fashion e-commerce platform.	The company mainly focuses on women's wear, but it also offers men's apparel, children's clothes, accessories, shoes, bags and other fashion items.	Pretty Gal Clothing mainly targets the whole cities in Philippines along with other consumer markets. The brand was founded in October 2020, and since then it has upheld the philosophy that "everyone can enjoy the beauty of	fashion." 
	</div>
	<div style = "position: absolute; top: 640px; right: 700px; font-size: 10pt; color: black; font-family: bookshelf symbol7"> STAY CONNECTED
	</div>

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

	
</body>
</html>

