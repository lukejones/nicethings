<!doctype html>
<html lang="en">
<head>

	<!-- Meta stuff -->
	<meta charset="utf-8">
	<title>Nice Things</title>
	<meta name="description" content="Insert something useful here.">

	<!-- Styles & scripts -->
	<link rel="stylesheet" href="styles/css/main.css">
	<script src="scripts/min/jquery.min.js"></script>
	<script src="scripts/min/view.min.js?auto"></script>
	<script src="http://use.typekit.com/feu7nwp.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-6426998-22']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>

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
	        echo "\t\t<li><a class=\"view\" rel=\"nice-things\" href=\"things/$file\"><img src=\"createThumb.php?src=things/$file&w=128&h=128\" width=\"128\" height=\"128\" /></a></li>\r\n";
	    }
	}
?>
	</ul>

</body>
</html>
