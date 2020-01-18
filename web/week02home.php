<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Thomas Wood's Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="week02home.css" type="text/css">
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
		echo(date("F d, Y h:i:s A", $time));
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
      <h2>Grand Opening</h2>
      <h4>Our Grand Opening is in the beginning of April</h4>
      <h4><b>Our hours are 9 AM to 6 PM, Monday through Saturday.</b></h4><h4>
      </h4><h5>We are  here and ready to help the community, college student and tinkers alike.</h5>
      <img src="grand_opening.jpg" alt="Grand Opening">
    
      <h2>We Are Open</h2>
      <h4>We are and have been open since the 6th of March of 2019</h4>
      <h5>We have plenty of RadioShack stock and a knowledgeable staff. We do repairs for iPhones and help with data recovery for computers.</h5>
      <img src="inside_store.jpg" alt="Soft Opening">
    </div>
	<div class="side">
      <h2>About Me</h2>
      <img src="https://webmailbyui-my.sharepoint.com/:i:/g/personal/lehitom_byui_edu/EfVqqVoA-KJOnWgNtSeoqvEBkDRJpyer-vcp9zCDjklSgQ?e=OFMhli" alt="My face" width="250">
      <p>Been printing since May of 2018</p>
      <h3>Why I started printing</h3>
      <p><b>I</b> was a recently returned LDS missionary when I found out that my family had purchased a 3D printer.</p><br>
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