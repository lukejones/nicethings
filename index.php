<!doctype html>
<html lang="en">
<head>

	<!-- Meta stuff -->
	<meta charset="utf-8">
	<title>Nice Things</title>
	<meta name="description" content="Insert something useful here.">

	<!-- Styles & scripts -->
	<link rel="stylesheet" href="styles/css/main.css">

</head>
<body>

<?php
	// A lovely bit of PHP by @_dte to loop images
	$dir = opendir("./things");
	while (false !== ($file = readdir($dir))) { /* opendir/readdir */
	    if($file != "." && $file != "..") {
	        echo '<img src="createThumb.php?src=things/'.$file.'&w=200&h=200" />';
	    }
	}
?>

</body>
</html>
