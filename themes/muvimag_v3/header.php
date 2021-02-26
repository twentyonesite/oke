<?php 
/*
| -------------------------------------------------------------------------------
| Author            : Mathin Mochammad
| Template Name     : Muvimag V2
| -------------------------------------------------------------------------------
*/
include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="theme-color" content="#111111">
					<title itemprop="name"><?php oc_title();?></title>
        <meta name="description" content="<?php oc_description();?>">
        <meta name="keywords" content="<?php echo config('sitekeywords');?>" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="author" content="admin">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta property="og:locale" content="en_US">
        <meta property="og:title" content="<?php oc_title() ?>" />
        <meta property="og:description" content="<?php oc_description();?>">
        <meta property="og:type" content="website" />
        <meta property="og:author" content="Admin">
        <meta property="og:site_name" content="<?php echo config('sitename') ?>">
        <meta property="og:url" content="<?php echo site_uri() ?>" />
        <?php if (isset($images)): ?>
        <meta property="og:image" content="<?php echo $images ?>" />
        <?php else: ?>
        <?php endif ?>
								<meta property="og:locale" content="en_US">
									<meta property="og:type" content="website">
	<meta property="og:site_name" content="<?php echo config('sitename') ?>">
		<link rel="stylesheet" id="bootstrap-css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="jasny-css" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="awesome-css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="simple-css" href="//cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="google-font" href="//fonts.googleapis.com/css?family=Oswald|Open+Sans" type="text/css" media="all">
		<link rel="stylesheet" id="style-font" href="<?php style_theme();?>/css/style.min.css" type="text/css" media="all">
		<link rel="shortcut icon" href="<?php echo site_url() . '/assets/images/'.config('favicon')?>">
		<?php oc_head(); ?>
		</head>
		<body class=" movie single">
								<header>
									<div class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<button type="button" class="side-toggle" data-toggle="offcanvas" data-target="#side-menu" data-canvas="body">
		<span class="icon-menu"></span>
	</button>
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
			<span class="icon-options-vertical"></span>
		</button>
		<a class="navbar-brand" href="<?php echo site_uri() ?>">Watch Movies & TV Series</a>
	</div>
	<nav class="collapse navbar-collapse" id="main-navbar">
		<form method="GET" action="/" class="navbar-form navbar-left">
			<div class="input-group">
				<span class="input-group-addon">
					<input type="radio" name="type" value="movie" checked> Movie 
						<input type="radio" name="type" value="tv" class="spaceleft" > TV
							<span class="nomobile"> Shows</span>
						</span>
						<input type="text" name="s" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="submit">
									<span class="icon-magnifier"></span>
								</button>
							</span>
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/p/movies-nowplay/">
								<span class="icon icon-film"></span> Movies
							</a>
						</li>
						<li>
							<a href="/p/tv-airing/">
								<span class="icon fa fa-television"></span> TV Shows
							</a>
						</li>
						<li>
							<a href="<?php echo site_url() ?>/?action=register">
								<span class="icon icon-cloud-download"></span> Register
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<nav id="side-menu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
			<a class="navmenu-brand" href="<?php echo site_uri() ?>"><?php echo config('sitename') ?></a>
			<ul class="nav navmenu-nav">
				<li class="active">
					<a href="/">
						<span class="icon icon-home"></span> Homepage
					</a>
				</li>
				<li>
					<a href="<?php echo site_uri() ?>movie/">
						<span class="icon icon-film"></span> Movies
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo view_page( 'movies-nowplay' );?>">Now Playing</a>
						</li>
						<li>
							<a href="<?php echo view_page( 'popular-movies' );?>">Popular</a>
						</li>
						<li>
							<a href="<?php echo view_page( 'toprated-movies' );?>">Top Rated</a>
						</li>
						<li>
							<a href="<?php echo view_page( 'upcoming-movies' );?>">Coming Soon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo site_uri() ?>tv/">
						<span class="icon fa fa-television"></span> TV Shows
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo view_page( 'tv-airing' );?>">Now Airing</a>
						</li>
						<li>
							<a href="<?php echo view_page( 'tv-popular' );?>">Popular</a>
						</li>
						<li>
							<a href="<?php echo view_page( 'tv-ontheair' );?>">On The Air</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo site_url() ?>/?action=register">
						<span class="icon icon-cloud-download"></span>Register to Download
					</a>
				</li>
			</ul>
		</nav>
	</header>