<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Micro Blogging - el lugar donde compartes tus historias e ideas</title>
	    <link rel="stylesheet" href= "css/app.css">
</head>
<body>
<header>
<div id="brand"><a href="/"><img src="img/1200px-LiveJournal_icon.svg.png">Brand</a></div>
	<nav>
		<ul>
			<li><a href="/">Main</a></li>
			<li><a href="/blogs">Top</a></li>
			<li><a href="/about">About</a></li>
			<li id="login"><a href="index.php?c=auth&a=login">Log in</a></li>
			<li id="signup"><a href="index.php?c=auth&a=register">Sign up</a></li>
		</ul>	
	</nav>
	<div id="hamburger-icon" onclick="toggleMobileMenu(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
  <ul class="mobile-menu">
  				<li><a href="/">Main</a></li>
			<li><a href="/blogs">Top</a></li>
			<li><a href="/about">About</a></li>
			<li id="login">Log in</li>
			<li id="signup">Sign up</li>
  </ul>
</div>
</header>