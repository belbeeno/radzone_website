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
		<?php
		echo $body_bottom;
		echo $footer;
		echo $bootstrap_core
		?>
	</body>
</html>

*/

$meta_and_links = <<< EOF
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Rad Zone Games">
	<meta name="author" content="Ryan Lee">
	<link rel="icon" href="../../favicon.png" type="image/png" />
	<link rel="shortcut icon" href="/favicon.ico" />

	<link rel="stylesheet" href="http://www.radz.one/main.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
EOF;

$javascript = <<< EOF
	<script type="text/javascript">
		// Variables
		var viewport = $(window);
		var root = $('html');
		var maxScroll;

		// Bind events to window
		viewport.on({
		  scroll: function() {
		    // Grab scroll position
		    var scrolled = viewport.scrollTop();

		    /**
		     * Calculate our factor, setting it as the root `font-size`.
		     *
		     * Our factor is calculated by multiplying the ratio of the page scrolled by our base factor. The higher the base factor, the larger the parallax effect.
		     */
		    root.css({ fontSize: (scrolled / maxScroll) * 50 });
		  },
		  resize: function() {
		    // Calculate the maximum scroll position
		    maxScroll = root.height() - viewport.height();
		  }
		}).trigger('resize');
	</script>
EOF;

$body_bottom_no_footer = <<< EOF
			</div><!-- /.starter-template -->
    	</div><!-- /.container -->
	</div><!-- /.parallax_layer-base -->
</div><!-- /.parallax -->
EOF;

$body_shapes = <<< EOF
	<img src="img/shapes/checkers.png" class="parallax  shape0">
	<img src="img/shapes/circle.png" class="parallax  shape1">
	<img src="img/shapes/pointyridge.png" class="parallax  shape2">
	<img src="img/shapes/squiggle.png" class="parallax  shape3">
	<img src="img/shapes/zigzag.png" class="parallax  shape4">
EOF;

$bootstrap_core = <<< EOF
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
EOF;
?>