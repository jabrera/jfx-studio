<?php
require_once('config.php');
?>
<html>
<head>
<title>Jfx-Design</title>
<link rel="stylesheet" media="all" href="styles/style.css">
</head>
<body><center>
<div id="whole">
	<div id="topBaseObject">
		<div id="topBaseContainer">
		<a href="index.php" id="navOption" class="top1">Home</a>
		<a href="studio.php" id="navOption" class="top2">Studio</a>
		<a href="index.php" id="topLogoPos"><div id="topLogo">
		
		</div></a>
		<a href="portfolio.php" id="navOption" class="top2">Portfolio</a>
		<a href="contact.php" id="navOption" class="top1">Contact</a>
		</div>
	</div>
	<div id="mainContent">
		<div id="contentContainer">
			<div id="headerPhoto">
			
			</div>
			<div id="juvar">
			
			</div>
		</div>
		<div id="containerBody">
			<hr class="white_top">
			<div id="conBase">
				<div id="conPad">
				<h1><img src="images/default/bg/logo_mini.png" class="logomini">Latest Project</h1><hr class="white_middle">
				<center><?php
				$query = mysql_query("SELECT * FROM portfolio ORDER BY id DESC LIMIT 1");
				while($row = mysql_fetch_array($query)) {
					$name = $row['name'];
					$pn = $row['photoname'];
					$id = $row['id'];
					echo '<a href="portfolio.php?view_project='.$id.'" style="background:transparent;display:block;"><img src="images/default/webthumb/'.$pn.'.jpg"></a><h2>'.$name.'</h2>';
				}
				?></center>
				<h1><img src="images/default/bg/logo_mini.png" class="logomini">Welcome</h1><hr class="white_middle">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi! I'm Juvar Abrera from Cavite, Philippines and I'm 16 years old. I am currently studying BS Information Technology at De La Salle University - Dasmari&ntilde;as.</p>

				<p>I've started studying my first mark-up language which is HTML, last April 2011. Then proceeded studying CSS, CSS3, Javascript, PHP and mySQL. Well, I don't call myself a professional web designer or web developer but I'd liked to make elegant and creative web designs.</p>

				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I studied using text tutorials at w3schools.com and video tutorials on youtube on how to make a website. I started making websites with notepad even though I have an application called Adobe Dreamweaver. By typing the code one-by-one, it'll be better for me to enhance my coding skills and to make creative designs.</p>

				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Some additional information about my hobby or interest is I like photography especially in Nature and Macro photography.</p>

				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In this website, you'll see some of my works I've made since April 2011.</p>
				</div>
			</div>
			<hr class="white_bottom">
		</div>
		<div id="footerContainer">
			<div id="footerBase">
			<table width="100%">
				<tr valign="top">
					<td><img src="images/default/bg/miniminilogo.png" class="miniminilogo">Jfx-Design Copyright 2012. All rights reserved.
					</td>
					<td align="right"><a href="index.php"><img src="images/default/bg/miniminilogo.png" class="miniminilogo">Home</a><img src="images/default/bg/miniminilogo.png" class="miniminilogo">
					<a href="studio.php">Studio</a><img src="images/default/bg/miniminilogo.png" class="miniminilogo">
					<a href="portfolio.php">Portfolio</a><img src="images/default/bg/miniminilogo.png" class="miniminilogo">
					<a href="contact.php">Contact</a>
					</td>
				</tr>
			</table>
			</div>
		</div>
		<div id="space">
		
		</div>
	</div>
</div>
</body>
</html>