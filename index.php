<!DOCTYPE html>
<html>
	<head>
		<title>Timaflu Webportal</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<header>
			<a href="?page=home">
				<div class="logo">
					<h1>Timaflu</h1>
				</div>
			</a>
			
			<div class="sublogo">
				<b>Timaflu Webportal</b> v1.0.0<br />
				<b>Gebruiker:</b> Hans de Boer<br />
				<b>ID:</b> 616188
			</div>
			
			<nav>
				<ul>
					<li><a href="?page=home">Home</a></li>
					<li><a href="?page=verkoop">Verkoop</a></li>
					<li><a href="?page=inkoop">Inkoop</a></li>
					<li><a href="?page=facturering">Facturering</a></li>
					<li><a href="?page=magazijn">Magazijn</a></li>
					<li><a href="#">Rapporten <b class="caret"></b></a>
						<ul>
							<li><a href="?page=jaaromzet">Jaaromzet</a></li>
							<li><a href="?page=meestwinstgevend">Meest winstgevend</a></li>
							<li><a href="?page=meestverkocht">Meest verkocht</a></li>
							<li><a href="?page=inkooptotalen">Inkooptotalen</a></li>
							<li><a href="?page=openstaandeorders">Openstaande orders</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		
		<article>
			<?php
				$servername = "databases.aii.avans.nl";
				$username = "samgoeij";
				$password = "Ab12345";
				$dbname = "samgoeij_db2";
				
				$page = $_GET['page'];
				$page = basename($page);

				if (!empty($page)) {
					if (file_exists($page . ".php")) {
						include($page . ".php");
					} else {
						include("404.php");
					}
				} else {
					include("home.php");
				}
			?>
			
			
			<!--<?php include("loremipsum.php");?>-->
		</article>
		
		<!-- If the window is too small, display error. -->
		<div class="error toosmall">
				<h2>The page is too small!</h2>
				<h2>Make the screen bigger to make the content available.</h2>
		</div>
	</body>
</html>