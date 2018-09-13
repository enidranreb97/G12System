<html>
<head>
<title>LORIMI</title> <meta charset="utf-8">
<?php session_start(); include"dbcon/mydbconn.php";?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<div class="wrapper row1"> 
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
		<h1>The Lord Reigns</h1>  
    </div>
	<div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><a href="#"><strong>Elive</strong><br>--------</a></li>
        <li><a href="#"><strong>Profile</strong><br>------------</a></li>
      </ul>
    </div>
  </header>
</div>

<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <ul class="clear">
      <li><a class="drop" href="#">Who We Are</a>
        <ul>
          <li><a class="drop" href="#">New Here?</a>
			<ul>
				<li><a href="#">Our Vision & Mission</a></li>
				<li><a href="#">The Inquirer's Class</a></li>
				<li><a href="#">About Adult Baptism</a></li>
			</ul>
		  </li>
          <li><a class="drop" href="#">Directions</a>
			<ul>
				<li><a href="#">Our History</a></li>
				<li><a href="#">Our Facilities</a></li>
				<li><a href="#">Member Care</a></li>
			</ul>
		  </li>
		  <li><a class="drop" href="#">Discover Your Place</a>
			<ul>
				<li><a href="#">Church Leadersip</a></li>
				<li><a href="#">Programs & Classes</a></li>
			</ul>
		  </li>
        </ul>
      </li>
	  <li><a class="drop" href="#">Worship</a>
        <ul>
          <li><a class="drop" href="#">Media</a>
			<ul>
				<li><a href="#">Photo Gallery</a></li>
				<li><a href="#">Featured Videos</a></li>
			</ul>
		  </li>
          <li><a class="drop" href="#">Music</a>
			<ul>
				<li><a href="#">Adult Playlist</a></li>
				<li><a href="#">Youth & Children</a></li>
			</ul>
		  </li>
		  <li><a class="drop" href="#">Calendar</a>
			<ul>
				<li><a href="#">Worship Times</a></li>
				<li><a href="#">Upcoming Events</a></li>
			</ul>
		  </li>
		  <li><a class="drop" href="#">Library</a>
			<ul>
				<li><a href="#">E - Newsletter</a></li>
				<li><a href="#">Book & Magazines</a></li>
			</ul>
		  </li>
        </ul>
	  </li>
	  <li><a class="drop" href="#">Children</a>
        <ul>
		  <li><a href="index.html">Infant Baptism</a></li>
		  <li><a href="index.html">Early Childhood</a></li>
		  <li><a href="index.html">Elementary level</a></li>
		  <li><a href="index.html">Special Events</a></li>
        </ul>
	  </li>
	  <li><a class="drop" href="#">Youth</a>
        <ul>
		  <li><a href="index.html">Middle School</a></li>
		  <li><a href="index.html">Confirmation</a></li>
		  <li><a href="index.html">Highschool Level</a></li>
		  <li><a href="index.html">College Level</a></li>
		  <li><a href="index.html">Internships</a></li>
		  <li><a href="index.html">Young Adults</a></li>
		  <li><a href="index.html">Special Events</a></li>
        </ul>
	  </li>
	  <li><a class="drop" href="#">Adult</a>
        <ul>
		  <li><a href="index.html">Cell Groups</a></li>
		  <li><a href="index.html">Women Ministry</a></li>
		  <li><a href="index.html">Men Ministry</a></li>
		  <li><a href="index.html">Teams & Staffs</a></li>
		  <li><a href="index.html">Seniors & Leaders</a></li>
		  <li><a href="index.html">Special Events</a></li>
        </ul>
	  </li>
	  <li><a class="drop" href="#">Resources</a>
        <ul>
		  <li><a href="index.html">Baptism Service</a></li>
		  <li><a href="index.html">Wedding Service</a></li>
		  <li><a href="index.html">Memorial Service</a></li>
        </ul>
	  </li>
  </nav>
</div>

<body id="top" 	onLoad="changeHashOnLoad();">

<!--
<?php 
	session_start();
	$user_log = $_SESSION['user'];
	
	include"dbcon/mydbconn.php";
	$sel_query = "select funm from user where username = '$user_log'";
			$sel_result = mysql_query($sel_query) or die(mysql_error());
				while($row = mysql_fetch_array($sel_result))
			{
					list($funm) = $row;
				
			}
?>
-->