<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Thomas Wood's Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="main.css" type="text/css">
  <meta name="description" content="Thomas Wood is an amazing student that looks forward to learning a lot in Web Engineering II.">
</head>

<body>
  <header>
    <div class="header-content">
      <div class="header-content-main">
        <h1>Thomas Wood's Homepage</h1>
        <h2>Live from Blackfoot, ID</h2>
        <h3>Page last loaded on server time: 
		<?php $time = time();
				$today = date("D M j G:i:s T Y");
		echo(DateTime("F d, Y h:i:s A", $today));
		?></h3>
      </div>
    </div>
  </header>
  
  <div class="navbar">
    <a href="links.html">Assignments</a>
    <a href="links.html">Personal Project</a>
    <a href="links.html">Group Project</a>
    <a href="links.html">Contact Me</a>
  </div>
  
  <div class="row">
    
    <div class="main">
      <h2>Calibration complete</h2>
      <h4>My newer printer is back up and running after being moved to its new location!</h4>
      <h4><b>I'll be up and priting soon again.</b></h4>
      <h5>I love to print small little gadgets that people like to have.</h5>
      <img src="https://assets.pcmag.com/media/images/504377-3d-printing-what-you-need-to-know.jpg" alt="Test prints">
    
      <h2>Just purchased second printer</h2>
      <h4>After a lot of contemplation, I have purchased a second printer from the same company!</h4>
      <h5>These printers are from Zonestar in China, and while a pain to maintain, they are at a great price point.</h5>
      <img src="https://imgaz.staticbg.com/thumb/view/oaupload/banggood/images/DD/03/fa5348cd-9f5c-4136-8faa-97de6be06c5e.jpg" alt="ZoneStar printer">
    </div>
	<div class="side">
      <h2>About Me</h2>
      <img src="https://cdn.shop.prusa3d.com/1311-large_default/original-prusa-i3-mk3-3d-printer.jpg" alt="Prusa" width="250">
      <p>Been printing since May of 2018</p>
      <h3>Why I started printing</h3>
      <p>I was a recently returned LDS missionary when I found out that my family had purchased a 3D printer.</p><br>
      <p>I now print whenever I can find spare time.</p><br>
      <p>“If other people are putting in 40 hour workweeks and you’re putting in 100 hour workweeks, then even if you’re doing the same thing … you will achieve in four months what it takes them a year to achieve.” -Elon Musk-</p><br>
    </div>
  </div>

  <footer>
    <div class="footer">
      <h2>CS 313 - Shawn Porter - Web Engineering II</h2>
    </div>
  </footer>


</body></html>