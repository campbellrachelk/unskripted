<?php
if($_POST["message"]) {
    mail("info@unskripted.tech", "Form to email message", $_POST["message"], "From: form@email.address");
}
?>

<!DOCTYPE html>
<html>



<head>
	<title>Creative Web Design</title>
	<link rel="stylesheet" type="text/css" href="./portfolio.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:700|Raleway:300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato|Vollkorn&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/d6cc6890c0.js" crossorigin="anonymous"></script>
</head>


<!-- Begin Page Content -->

<body>
<!-- Navigation Header -->
<div class="container">
<div class="description">
	
	<img class="logo" alt="Logo" src="unskripted2.png">

	<!-- <div class="navbar">
		<p class="work">Work With Me</p>
	</div> -->


	<div class="textArea">
	 <hr>
	<h1 class="subtitle"> Website Design, Photography, Social Media </h1>
	</div>

	<a href="#aboutMe"><i class="fas fa-angle-double-down fa-2x" id="arrowDesktop"></i></a>
	<a href="#aboutMe"><i class="fas fa-angle-double-down fa-3x" id="arrowMobile"></i></a>

</div>


<div class="aboutMe" id="aboutMe">
	

	<h1 class="welcome">Welcome.</h1>

	 
	
	<p>Here at Unskripted, we are passionate about helping people like you cultivate your dream.</p>
	<p>Let's face it - In 2019, there are a <em>lot</em> of options for consumers...</p>
	<p>More and more, people rely on the internet to help them choose where to spend their money.</p>
	<h2>That's where we come in.</h2><hr>
<div class="grid">
	<div class="servicesContent">
		<p><strong>We offer:</strong></p>
		<ul>
			<li>Photography</li>
			<li>Custom Websites</li>
			<li>Drag-and-Drop Websites</li>
			<li>Social Media Content Generation</li>
		</ul>
	</div>

	<div class="skills">
		<p><strong>With Skills Including:</strong></p>
		<ul>
			<li>HTML/CSS</li>
			<li>JavaScript</li>
			<li>Search Engine Optimization</li>
			<li>Social Media Marketing</li>
			<li>Professional Design</li>
			<li>Adobe Creative Suite</li>
			<li>Portrait and Still Life Photography</li>
			
			<li>And more...</li>
		</ul>

	</div>

</div>



</div>

<div class="services">
<hr>
	<p>You're great at what you do. Give yourself the time to focus on it.</p>
	<h2> Let us handle the rest. </h2>

	<div class="servicesIntro">
		
	<!-- 	<h2> Let us handle the tech... so you can get back to doing more of what you love. </h2> -->
	</div>

<div class="form">
	<h2> Questions? Ask here: </h2>
	<form method="post" action="contact.php"  enctype="text/plain">
<label>Name:</label>
<input type="text" name="name">
<label>E-mail:</label>
<input type="text" name="mail">
<label>Inquiry:</label>
<input type="text" name="comment" size="50"><br>
<input class="greyButton" type="submit" value="Send"><br>
<input class="greyButton" type="reset" value="Reset">
</form>
</div>

</div>
</div>
</body>
</html>