<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
		include 'base.php';
		echo $meta_and_links;
		?>
		<title>Rad Zone Games</title>
		<?php
		echo $javascript;
		?>
	</head>
	<body onload="init()">
		<?php
		echo $body_top;
		?>

		<center>
			<div style="background-color: #55555555; width: 33%; padding: 10px;">
				<img src="img/FactoryHiro.gif" style="width:100%;"/>
				<h2><a href="http://factory.radz.one">Factory Hiro</a> has been released!</h2>
				<p>Buy it today on <a href="https://itunes.apple.com/us/app/factory-hiro/id1302974264">iOS</a>, <a href="https://play.google.com/store/apps/details?id=com.RadZone.Factory">Android</a>, <a href="https://radzone.itch.io/factory-hiro">Itch.io</a> and <a href="http://store.steampowered.com/app/770820/Factory_Hiro/">Steam</a>!</p>
			</div>
		</center>

		<!-- BODY &autoplay=1 -->
		<div class="tv-wrapper">
			<iframe src="https://www.youtube.com/embed/Lf8JgW3TKC0?modestbranding=1&showinfo=0&controls=0&loop=1&playlist=Lf8JgW3TKC0&vq=hd1080&rel=0&autoplay=1" frameborder="0" width="400" height="300"></iframe>
		</div> <!-- .tv-wrapper -->
		<!-- /BODY -->

		<?php
		echo $body_bottom;
		echo $footer;
		echo $bootstrap_core
		?>
	</body>
</html>