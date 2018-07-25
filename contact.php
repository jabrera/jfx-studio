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
				<h1><img src="images/default/bg/logo_mini.png" class="logomini">Contact</h1><hr class="white_middle">
				<form action="contactm.php" method="post">
				<table cellpadding="10px">
				<?php
				if(isset($_GET['type'])) {
					$type = $_GET['type'];
					if($type == 'error') {
						echo '
					<tr valign="top">
						<td style="padding-right:40px;" colspan="2"><span style="color:red;font-weight:bold;">Please fill up the form properly.</span></td>
					</tr>
						';
					} elseif($type == 'success') {
						echo '
					<tr valign="top">
						<td style="padding-right:40px;" colspan="2"><span style="color:green;font-weight:bold;">Your message has been sent successfully!</span></td>
					</tr>
						';
					}
				}
				?>
					<tr valign="top">
						<td style="padding-right:40px;">Full Name: </td><td><input type="text" name="fullname" class="default_text" placeholder="Full Name"></td>
					</tr>
					<tr valign="top">
						<td style="padding-right:40px;">Email: </td><td><input type="text" name="email" class="default_text" placeholder="Email"></td>
					</tr>
					<tr valign="top">
						<td style="padding-right:40px;">Message: </td><td><textarea name="message" class="default_text" placeholder="Message"><?php
						if(isset($_GET['report_link'])) {
							$rl = $_GET['report_link'];
							echo 'Report broken link:
'.$rl;
						}
						?></textarea></td>
					</tr>
					<tr valign="top">
						<td style="padding-right:40px;"></td><td><input type="submit" class="default_button"></textarea></td>
					</tr>
				</table>
				</form>
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