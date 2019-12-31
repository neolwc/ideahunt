<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Idea Hunt</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="navbar-full navbar-fixed-top">
		<div class="collapse" id="new">
			<div class="p-a-1">
				<form class="container" method="post" action="post.php">
					<fieldset class="form-group">
						<label for="textarea">I wish there's a product/website/app to...</label>
						<textarea class="form-control" id="textarea" name="idea" required></textarea>
					</fieldset>
					<div class="row">
						<div class="input-group col-xs-8">
							<span class="input-group-addon" id="basic-addon1">@</span>
							<input class="form-control" id="twitter" name="twitter" placeholder="Your Twitter"<?php
							if (isset($_SESSION['ideahunt_twitter'])) {
								print ' value="'.$_SESSION['ideahunt_twitter'].'"';
							}
							?> required>
						</div>
						<div class="col-xs-4">
							<button type="submit" class="btn">Send</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<nav class="navbar navbar-dark bg-inverse">
			<div class="container">
				<a class="navbar-brand" href="#">Idea Hunt</a>
				<button class="navbar-toggler pull-xs-right<?php
				if (!isset($_SESSION['ideahunt_twitter'])) {
					print ' animated';
				}
				?>" type="button" data-toggle="collapse" data-target="#new"><img src="img/cross.svg"></button>
			</div>
			 <ul class="nav navbar-nav nav-inline">
				<li class="nav-item col-xs-4"><a class="nav-link active" data-toggle="tab" href="#total">Total</a></li>
				<li class="nav-item col-xs-4"><a class="nav-link" data-toggle="tab" href="#thisw">This week</a></li>
				<li class="nav-item col-xs-4"><a class="nav-link" data-toggle="tab" href="#today">Today</a></li>
			</ul>
		</nav>
	</header>
	<main class="tab-content">
		<div class="container title"><span id="typed">People wish there is a product to...</span></div>
		<div class="container title" id="typed-strings">
			<p>Need an idea for a new project?</p>
			<p>Struggling with unsolved problems?</p>
			<p>Post your wishes here,</p>
			<p>Help people to come up with ideas.</p>
			<p>They could be the solutions for you.</p>
			<P>Right now,</P>
			<p>People wish there is a product to...</p>
		</div>
