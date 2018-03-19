<?php
/**** STANDARD TEMPLATE ****

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
		include 'base.php';
		echo $meta_and_links;
		?>
		<title>belbeeno makes professional videogames</title>
		<?php
		echo $js_lite;
		?>
	</head>
	<body onload="init()">
		<?php
		echo $body_top;
		?>
		<!-- BODY -->
	</body>
</html>

*/

$meta_and_links = <<< EOF
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Rad Zone Games">
	<meta name="author" content="Ryan Lee">
	<link rel="icon" href="../favicon.png" type="image/png" />
	<link rel="shortcut icon" href="favicon.ico" />

	<link rel="stylesheet" href="main.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
EOF;

$javascript = <<< EOF
	<script type="text/javascript">
	var viewport = $(window);
	var root = $('html');
	var maxScroll;

	viewport.on({
		scroll: function() {
			var scrolled = viewport.scrollTop();
			/**
			 * Calculate our factor, setting it as the root `font-size`.
			 *
			 * Our factor is calculated by multiplying the ratio of the page scrolled by our base factor. 
			 * The higher the base factor, the larger the parallax effect.
			 */
			root.css({ fontSize: (scrolled / maxScroll) * 100 });
		},
		resize: function() {
			maxScroll = root.height() - viewport.height();
		}
	}).trigger('resize');
	NekoNoDefault = true;
	</script>
	<script src="https://webneko.net/n20171213.js"></script>
	<script src="easter.js"></script>
EOF;

$body_shapes = <<< EOF
	<img src="img/shapes/checkers.png" class="parallax  shape0">
	<img src="img/shapes/circle.png" class="parallax  shape1">
	<img src="img/shapes/pointyridge.png" class="parallax  shape2">
	<img src="img/shapes/squiggle.png" class="parallax  shape3">
	<img src="img/shapes/zigzag.png" class="parallax  shape4">
EOF;
?>