<!doctype html>
<html lang="en">
<head>

	<!-- Meta stuff -->
	<meta charset="utf-8"/>
	<title>Nice Things</title>
	<meta name="description" content="Nice Things – a carefully curated collection of the most beautiful things on the planet."/>

	<!-- Styles & scripts -->
	<link rel="stylesheet" href="styles/main.css"/>
	<script src="scripts/jquery.js"></script>
	<script src="scripts/view.js?auto"></script>
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

        $(window).resize(resize);

        function resize() {
            var docWidth = $(document).width();
            var imageWidth = $('.thumbnail:first').width();
            var currGap = docWidth%imageWidth;

            //find out if there is a width that fits better
            var i = 128;
            var lowestGap = currGap;
            var lowestWidth = imageWidth;
            while (i--) {
                if (docWidth%i < lowestGap) {
                    lowestGap = docWidth%i;
                    lowestWidth = i;
                }

                if (i < 115) break;
            }

            $('.thumbnail').width(lowestWidth+'px').height(lowestWidth+'px');
        }

        $(document).ready(function(e) {
            resize();
        });
	</script>

</head>
<body>

	<header role="banner">
		<h1>Nice Things</h1>
		<p>A project by <a href="http://twitter.com/lukejones" title="Luke Jones">Luke Jones</a></p>
	</header><!--/banner-->

	<ol>
<?php
    $files = glob("./things/*.*");
    array_multisort(array_map('filemtime', $files), SORT_NUMERIC, SORT_DESC, $files);
?>
<?php foreach ($files as $file) { 
	$caption = preg_replace( '/\s*\d+$/', '', pathinfo($file, PATHINFO_FILENAME) ); 
?>
		<li>
			<a title="<? echo $caption ?>" class="view" rel="nice-things" href="<?php echo $file; ?>">
				<img class='thumbnail' src="createThumb.php?src=<?php echo $file; ?>&w=128&h=128" width="128" height="128"/>
			</a>
		</li>
<?php } ?>
	</ol>

</body>
</html>
