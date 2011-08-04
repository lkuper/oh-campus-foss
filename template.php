<?php
$site_title = "Open Source Immersion at UPenn";
$BASE="http://penn.openhatch.org/";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $page_title?> -- Open Source Comes to Campus</title>
<link rel="stylesheet" type="text/css" href="<?php echo $BASE ?>/style.css" media="screen" />
<base href="<?php echo $BASE ?>" />
</head>
<body>
<div id="header">
<h1><?php echo $site_title?>: <?php echo $page_title ?></h1>
 <div id="menu">
  <ul id="nav">
   <li><a href="">Home</a></li>
   <li><a href="learning/">What we teach</a></li>
   <li><a href="past-events/">Past events</a></li>
   <li><a href="upcoming-events/">Upcoming events</a></li>
   <li><a href="about/">About us</a></li>
  </ul>
 </div>
</div>
<div id="content">
<div id="right">
<?php echo $content ?>
</div>
	
</div>
</body>
</html>
