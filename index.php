<!doctype html>
<html lang="en">
<head>

	<!-- Meta stuff -->
	<meta charset="utf-8">
	<title>Nice Things</title>
	<meta name="description" content="Insert something useful here.">

	<!-- Styles & scripts -->
	<link rel="stylesheet" href="styles/css/main.css">
	<script src="http://use.typekit.com/feu7nwp.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

</head>
<body>

	<header id="masthead">
		<h1>Nice Things<a href="http://www.lukejones.me/" title="Created by Luke Jones">.</a></h1>
	</header><!-- /#masthead -->

	<ul>
<?php
	// A lovely bit of PHP by @_dte to loop images, createThumb by @adamstrawson and the img echo done by @benlumley
	$dir = opendir("./things");
	while (false !== ($file = readdir($dir))) { /* opendir/readdir */
	    if($file != "." && $file != "..") {
	        echo "\t\t<li><a href=\"things/$file\"><img src=\"createThumb.php?src=things/$file&w=128&h=128\" /></a></li>\r\n";
	    }
	}
?>
	</ul>

</body>
</html>
