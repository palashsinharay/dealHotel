<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
                <title>Hotel List Page - Deal Hotel Book</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!--		<script type="text/javascript" src="javascript/head.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url('javascript/head.js');?>"></script>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/screen.css');?>" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/print.css');?>" media="print">
		<link rel="shortcut icon" href="<?php echo base_url('favicon.ico');?>" type="image/x-icon">
                
	</head>
	<body>
		<div id="root">
			<header id="top">
				<h1><a href="./" accesskey="h"></a></h1>
				<nav id="skip">
					<ul>
						<li><a href="#nav" accesskey="n">Skip to navigation (n)</a></li>
						<li><a href="#content" accesskey="c">Skip to content (c)</a></li>
						<li><a href="#footer" accesskey="f">Skip to footer (f)</a></li>
					</ul>
				</nav>
				<nav id="nav">
					<ul class="primary">
						 <li><a accesskey="1" href="<?php echo base_url();?>">Home</a> <em>(1)</em>
							<ul>
								<li><a href="hotel-list.html">Hotel List</a></li>
								<li><a href="hotel-details.html">Hotel Details</a></li>
								<li><a href="booking-view.html">Booking View</a></li>
								<li><a href="booking-confirm.html">Booking Confirm</a></li>
							</ul>
						</li>
						<li><a accesskey="6" href="#">Blog</a> <em>(2)</em>
							<ul>
								<li><a href="blog.html">Blog Listings</a></li>
								<li><a href="blog-article.html">Blog Single</a></li>
							</ul>
						</li>

						<li><a accesskey="7" href="<?php echo base_url('welcome/page/8');?>">Contact</a> <em>(3)</em></li>
					</ul>
					<ul class="secondary">
						<li class="gb"><span>En</span>
							<ul>
								<li class="de"><a href="./">Deutsh</a></li>
								<li class="es"><a href="./">Español</a></li>
								<li class="fr"><a href="./">Français</a></li>
								<li class="pl"><a href="./">Polski</a></li>
							</ul>
						</li>
						<li><span>USD</span>
							<ul>
								<li><a href="./">EUR</a></li>
								<li><a href="./">GBP</a></li>
								<li><a href="./">CHF</a></li>
								<li><a href="./">PLN</a></li>
							</ul>
						</li>
					</ul>
					<p class="link-a"><a href="./">Login</a> <a href="./">Register</a></p>
				</nav>
				<form action="./" method="post" id="search">
					<fieldset>
						<legend>Search</legend>
						<p>
							<label for="sa">Search</label>
							<input type="text" id="sa" name="sa" required>
							<button type="submit">Submit</button>
						</p>
					</fieldset>
				</form>
				<p class="tel">Call us today <span>(84) - 868 868 888</span></p>
			</header>    
			<nav id="breadcrumbs">
				<ul>
					<li><a href="./">Home</a></li>
					<li><a href="./">Hotel</a></li>
					<li><a href="./">Teades City</a></li>
					<li>Search Result</li>
				</ul>
			</nav>                
