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
				<?php
				if(isset($_GET['view_project'])) {
					$vp = $_GET['view_project'];
					$queryz = mysql_query("SELECT * FROM portfolio WHERE id = '$vp' LIMIT 1");
					$n = 0;
					while($row = mysql_fetch_array($queryz)) {
						$name = $row['name'];
						$photoname = $row['photoname'];
						$id = $row['id'];
						$desc = $row['description'];
						$n = 1;
						echo '
				<h1><img src="images/default/bg/logo_mini.png" class="logomini"><a href="portfolio.php">Portfolio</a> / '.$name.'</h1><hr class="white_middle">
				<center><img src="images/default/webthumb/'.$photoname.'.jpg">
				<h2>'.$name.'</h2><hr class="white_middle"></center>
				<p>'.$desc.'</p>
					';
					}
					if($n = 0) {
						header("http://www.jaweb.comze.com/version/2/portfolio.php?view_project=null");
					}
				} else {
					$query = mysql_query("SELECT * FROM portfolio ORDER BY id DESC");
					echo '
					
				<h1><img src="images/default/bg/logo_mini.png" class="logomini">Portfolio</h1><hr class="white_middle">';
					while($row = mysql_fetch_array($query)) {
						$name = $row['name'];
						$photoname = $row['photoname'];
						$id = $row['id'];
						echo '
					<a href="portfolio.php?view_project='.$id.'" class="webthumb"><img src="images/default/webthumb/'.$photoname.'.jpg" width="410px"><h4>'.$name.'</h4></a>
					';
					}
				}
				?>
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