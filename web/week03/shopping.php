<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Thomas Wood's 3D Printing shopping cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="main.css" type="text/css">
  <meta name="description" content="Thomas Wood is an amazing student that looks forward to learning a lot in Web Engineering II.">
</head>

<body>
  <header>
    <div class="header-content">
      <div class="header-content-main">
        <h1>Thomas Wood's 3D Printing Shopping Cart</h1>
        <h2>Shipped from Blackfoot, ID</h2>
        <h3>Page last refreshed: 
		<?php $today = date("D M j G:i:s T Y");
		echo($today);
		?></h3>
      </div>
    </div>
  </header>
  
  <div class="navbar">
    <a href="links.html">Shopping</a>
	<a href="links.html">Cart</a>
    <a href="links.html">Checkout</a>
    <a href="links.html">Contact Us</a>
    <a href="links.html">Assignments</a>
  </div>
  
  <div class="row">
    
    <div class="main">
	  <div class="item">
		<h2>Companion Cube</h2>
		<h4>Simple white campanion cube from Portal</h4>
		<h4><b>$15.00 per print</b></h4>
		<img src="https://cdn.thingiverse.com/renders/2a/4d/ba/82/f0/ff4d9119179c175c6d02f33a9c9de4d0_preview_featured.jpg" alt="Companion Cube">
      </div>
	
	  <div class="item">
        <h2>Just purchased second printer</h2>
        <h4>After a lot of contemplation, I have purchased a second printer from the same company!</h4>
        <h5>These printers are from Zonestar in China, and while a pain to maintain, they are at a great price point.</h5>
        <a href="https://www.thingiverse.com/thing:1958078"><img src="https://imgaz.staticbg.com/thumb/view/oaupload/banggood/images/DD/03/fa5348cd-9f5c-4136-8faa-97de6be06c5e.jpg" alt="ZoneStar printer">
	  </div>
	</div>
	
	<div class="side">
      <h2>About Us</h2>
      <img src="https://cdn.shop.prusa3d.com/1311-large_default/original-prusa-i3-mk3-3d-printer.jpg" alt="Prusa" width="250">
      <p>Been printing since May of 2018</p>
      <h3>Why Order From Me</h3>
      <p>All prints listed on this site have been well tested and can be manufactured within 3 days</p><br>
      <p>They are durable and can be printed in different colors (coming soon)</p><br>
      <p>It's local and you don't have to wait for it to come from china!</p><br>
    </div>
  </div>

  <footer>
    <div class="footer">
      <h2>CS 313 - Shawn Porter - Web Engineering II</h2>
    </div>
  </footer>


</body></html>