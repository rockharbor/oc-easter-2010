<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Easter Weekend 2010 at the Fairgrounds</title>
		<link rel="stylesheet" type="text/css" href="css/2010styles.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
		<script type="text/javascript" src="js/jquery.localscroll.js"></script>
	</head>
	
	<body>
		<div id="border-top"></div>
		<div id="wrapper">
			<div id="container">
				<div id="header"><img src="img/header.png" width="700" height="170"/></div>
				<div id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php?p=about">About</a></li>
						<li><a href="index.php?p=what_to_expect">What to Expect</a></li>
						<li><a href="index.php?p=why_we_celebrate">Why We Celebrate</a></li>
						<li><a href="index.php?p=kids">Kids</a></li>
						<li><a href="index.php?p=who_is_jesus">Who is Jesus?</a></li>
						<li><a href="index.php?p=church_directory">Church Directory</a></li>
						<li><a href="index.php?p=directions">Directions</a></li>
					</ul>
				</div>
				<div id="content">
				<?php
				if (isset($_GET['p'])) {
					require_once($_GET['p'].'.html');
				} else {				
				?>
					<h2>Home</h2>
					<h3>Easter Weekend 2010 at the Fairgrounds</h3>
					<p>A celebration of Jesus. A celebration of life.</p>
					<p>Good Friday at the Warehouse<br />
					Friday, April 2 <br />
					6pm &amp; 8pm
					</p>
					<p>
					Easter at the Pacific Amphitheatre<br />
					Sunday, April 4<br />
					9am &amp; 11:15am
					</p>
					<p>ASL interpretation at 6pm [Good Friday] and 11:15am [Easter].</p>
				<?php } ?>
				</div>
			</div>
		</div>
		<div id="border-btm"></div>
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
			</script>
			<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("UA-7415608-5");
			pageTracker._trackPageview();
			} catch(err) {}
		</script>

	</body>
</html>