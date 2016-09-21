<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<?php session_start(); ?>
<?php include "_myconfig.php"; ?>

<title><?php calltitle(); ?></title>
</head>
<body>
<div class="w3-container w3-light-green" style="padding-top: 50px">
<h2><?php calltitle() ?></h2>
<p><?php callsubtitle(); ?></p>
</div>
<?php callmenu(); ?>
<?php callhotmenu(); ?>

<div class="w3-container" style="padding-top: 20px; clear: left;">
<div class="w3-card-4" style="width:100%;"> 
<header class="w3-container w3-blue">
  <h4>News</h4>
</header>
<div class="w3-container">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<footer class="w3-container w3-blue">
  <h7>Read more . . .</h7>
</footer>
</div>
</div>

</body>
</html>