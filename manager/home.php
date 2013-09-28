<?php
	$root = '1';
	require_once "_control.php";
	require_once "_inheritance.php";
?>
<!doctype html>
<!--[if lte IE 8]><html class="msie no-js no-svg" lang="en"><![endif]-->
<!--[if gte IE 9]><!--><html class="no-js no-svg" lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<title> HTML5 Framework </title>
<meta name="description" content="...">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="<?=$root?>assets/icons/Icon.png" rel="apple-touch-icon">
<link href="<?=$root?>assets/icons/favicon.png" type="image/png" rel="shortcut icon">
<link href="<?=$root?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?=$root?>assets/css/strap.css" rel="stylesheet" media="screen">
<script src="<?=$root?>assets/js/jquery-1.10.2.min.js"></script>
<script src="<?=$root?>assets/js/modernizr.js"></script>
<!--[if lt IE 9]>
  <script src="<?=$root?>assets/js/respond.min.js"></script>
<![endif]-->
<?php emptyblock('head'); ?>
</head>
<body>
<div id="sidr" class="device">
	<ul class="list-unstyled menu">
		<li class="device-menu">&nbsp;</li>
		<li class="home"><a href="#">homepage</a></li>
		<li><a>html5strap</a>
			<ul>
				<li><a href="#">another</a></li>
				<li><a href="#">another action</a></li>
				<li><a href="#">something else here</a></li>
			</ul>
		</li>
		<li><a href="#">bootstrap</a></li>
		<li><a href="#">ico moon</a></li>
		<li><a href="#">php inheritance</a></li>
	</ul>	
</div>
<div id="container">
<div id="wrap">
  <header>
    <a href="#main" class="sr-only">Skip to content</a>
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <a href="#sidr" id="sider" class="responsive-menu visible-xs visible-sm hidden-md hidden-lg">&nbsp;</a>
        <div class="navbar-header">
          <a class="navbar-brand" id="hdr-logo" href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Homepage"> HTML5STRAP v.4.0 </a>
        </div>
        <div class="navbar-collapse collapse navbar-right hidden-xs hidden-sm">
          <?php include 'includes/menunav.php'; ?>
        </div>
      </div>
    </div>
  </header>
  
  <article id="main" role="main">
    <?php emptyblock('content'); ?>
  </article>
</div>
<!-- #Wrap -->

<footer>
  <div class="container">
    &copy; 2013, Mark Joseph Rivera | iMarkDesigns. All rights reserved.
  </div>
</footer>
</div>
<!-- INT/EXT JAVASCRIPT -->
<script src="<?=$root?>plugins/sidr/sidr.min.js"></script>
<script src="<?=$root?>assets/js/bootstrap.min.js"></script>
<script src="<?=$root?>assets/js/plugins.js"></script>
<?php emptyblock('script'); ?>
</body>
</html>
