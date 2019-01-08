<?php
	date_default_timezone_set('America/Phoenix');
?>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
		<meta name="MobileOptimized" content="width">
		<meta name="HandheldFriendly" content="true">
		<title>Awesome Development | Ryan Dool</title>
		<meta name="description" content="Awesome full-stack web developer portfolio coming soon" >
		<link rel="stylesheet" href="/assets/css/style.css"/>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123648734-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-123648734-1');
		</script>
	</head>
	<body id="page-top">
		<header>
			<section class="content_container">
				<div class="row">
					<div class="col-xs-12"></div>
				</div>
			</section>
		</header>
		<main role="main" class="<?=(isset($pagetype))? $pagetype : '' ; ?>">