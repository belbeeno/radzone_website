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

		<!-- Stylesheets -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/main.css" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
EOF;

$javascript = <<< EOF
<script type="text/javascript">
		<!--
		//*
		// Good lord... from http://stackoverflow.com/questions/11381673/detecting-a-mobile-browser
		function mobileCheck(a) {
			var check = false;
  			(function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
  			return check;
  		}

		function init()
		{
			if (mobileCheck())
			{
				/*
				var unfriendly_links = document.getElementsByClassName("mobile_unfriendly_link");
				Array.prototype.filter.call(unfriendly_links, function(iter){
				    iter.setAttribute("href", "#");
				    iter.setAttribute("onClick", "return false;");
				});
				*/
			}
		}
		//*/
		-->
		</script>
EOF;

$body_top = <<< EOF
<div class="parallax">
	<div class="parallax_layer parallax_layer-back"></div>
	<div class="parallax_layer parallax_layer-base">
		<!-- NAVBAR -->
		<header class="header clearfix topbar">
			<nav>
				<ul class="nav float-right">
					<li class="nav-item">
						<a class="nav-link" href="https://www.twitter.com/RadZoneGames" title="Twitter" target="_blank" >
							<span class="sr-only">Twitter (@RadZoneGames)</span>
							<div class="d-none d-md-block header_link">twitter</div>
							<div class="d-md-none">
								<i class="fa fa-twitter-square fa-2x" aria-hidden="true" title="Twitter"></i>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="mailto:hello@radz.one" title="Contact">
							<span class="sr-only">Contact (hello@radz.one)</span>
							<div class="d-none d-md-block header_link">contact</div>
							<div class="d-md-none">
								<i class="fa fa-envelope fa-2x" aria-hidden="true" title="Contact"></i>
							</div>
						</a>
					</li>
				</ul>
			</nav>
			<a href="#" title="Rad Zone Games">
				<img src="http://radz.one/img/icon.png" width=40 height=40/>
			</a>
		</header>
		<!-- /NAVBAR -->
	    <div class="container">
	    	<div class="starter-template">
EOF;

$body_bottom = <<< EOF
			</div><!-- /.starter-template -->
    	</div><!-- /.container -->
		<!-- FOOTER -->
		<footer class="footer">
			<div class="bottombar">
				Site by <a href="http://www.belbeeno.com">belbeeno</a> using <a href="http://www.getbootstrap.com" target="_blank">Bootstrap</a><br/>
				<a href="https://twitter.com/belbeeno" target="_blank">@belbeeno</a> - 
				<a href="mailto:hello@radz.one">e-mail</a>
			</div>
		</footer>
		<!-- /FOOTER -->
	</div><!-- /.parallax_layer-base -->
</div><!-- /.parallax -->
EOF;

$body_bottom_no_footer = <<< EOF
			</div><!-- /.starter-template -->
    	</div><!-- /.container -->
	</div><!-- /.parallax_layer-base -->
</div><!-- /.parallax -->
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