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

<ul>
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
