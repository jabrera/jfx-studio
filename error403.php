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
				<h1><img src="images/default/bg/logo_mini.png" class="logomini">Error 403 - Forbidden</h1><hr class="white_middle">
				<h3>You don't have a permission to access this page.</h3><br><div style="background:#bbb;color:#1c1c1c;border:3px dashed white;padding:20px;width:500px;position:relative;left:50px;"><?php $url = $_SERVER['HTTPS'].$_SERVER['REQUEST_URI']; echo $url; ?></div><h4><a style="color:white;" href="contact.php?report_link=<?php echo urlencode($url); ?>">Report this link.</a></h4>
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