<html>
<head>
<?php session_start(); include"dbcon/mydbconn.php";?>
<title>LORIMI</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" 	onLoad="changeHashOnLoad();">

<!-- Top -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
  
<!-- L&R -->
    <div class="fl_left">
      <ul>
		<li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
      </ul>
    </div>
	
<!-- Time -->
	<div class="fl_right"> 
	  <ul>
		<li> <i class="fa fa-time"> </i> <?php include"time.php"; ?> </li>
	  </ul>
	</div>

  </div>
</div>

<!-- Church Name -->
<div class="wrapper row1"> 
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
		<h1>The Lord Reigns</h1>  
    </div>
	<div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><a href="#"><strong>Elive</strong><br>--------</a></li>
        <!-- <li><a href="#"><strong>Profile</strong><br>------------</a></li> -->
      </ul>
    </div>
  </header>
</div>

<!-- Intro Ansabe -->
<div class="wrapper coloured overlay bgded" style="background-image:url('images/lorimi.jpg');">
  <div class="hoc container clear">
    <div id="testimonial"> 
      <blockquote>
	  Odio quisque laoreet pretium turpis vitae convallis magna luctus ut maecenas quis felis 
	  pulvinar facilisis lacus sed viverra leo donec interdum enim non facilisis eros sem commodo 
	  nunc ac eleifend eros odio in erat cras congue ante et vehicula vulputate praesent vel mauris euismod.
	  </blockquote>
      <strong>A.Doe</strong> 
	  <em>Position, Company Name</em> 
    </div>
  </div>
</div>

<!-- Picture Picture 3x -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="sectiontitle center">
      <h6 class="heading">Nisl rhoncus dictum cras</h6>
      <p>Egestas consequat magna nec molestie integer iaculis turpis in ultrices.</p>
    </div>
    <div class="group latest">
      <article class="one_third first">
        <figure><a class="imgover" href="#"><img src="images/demo/320x220.png" alt=""></a></figure>
        <div class="txtwrap">
          <h4 class="heading">Egestas augue aliquam</h4>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fa fa-tag"></i> <a href="#">Category</a></li>
            <li><i class="fa fa-comments"></i> <a href="#">6 Comments</a></li>
          </ul>
        </div>
      </article>
      <article class="one_third">
        <figure><a class="imgover" href="#"><img src="images/demo/320x220.png" alt=""></a></figure>
        <div class="txtwrap">
          <h4 class="heading">Lorem fermentum ligula</h4>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fa fa-tag"></i> <a href="#">Category</a></li>
            <li><i class="fa fa-comments"></i> <a href="#">8 Comments</a></li>
          </ul>
        </div>
      </article>
      <article class="one_third">
        <figure><a class="imgover" href="#"><img src="images/demo/320x220.png" alt=""></a></figure>
        <div class="txtwrap">
          <h4 class="heading">Dolor sed dignissim</h4>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fa fa-tag"></i> <a href="#">Category</a></li>
            <li><i class="fa fa-comments"></i> <a href="#">10 Comments</a></li>
          </ul>
        </div>
      </article>
    </div>
  </section>
</div>

<!-- Menu Bar
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
-->
<!-- Slide Show
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <p>Nec imperdiet luctus</p>
            <h3 class="heading">Odio nunc lobortis nibh ornare velit metus tortor.</h3>
            <footer>
              <ul class="nospace inline pushright">
                <li><a class="btn" href="#">Vitae suspendisse</a></li>
                <li><a class="btn inverse" href="#">Molestie semper</a></li>
              </ul>
            </footer>
          </article>
        </li>
        <li>
          <article>
            <p>Quam risus blandit</p>
            <h3 class="heading">felis quisque consequat porttitor elementum.</h3>
            <footer>
              <ul class="nospace inline pushright">
                <li><a class="btn" href="#">Tincidunt orci</a></li>
                <li><a class="btn inverse" href="#">Euismod a nunc</a></li>
              </ul>
            </footer>
          </article>
        </li>
        <li>
          <article>
            <p>Ante vulputate maximus</p>
            <h3 class="heading">Aliquam rutrum varius justo et pretium ex vestibulum.</h3>
            <footer>
              <ul class="nospace inline pushright">
                <li><a class="btn" href="#">Magna consectetur</a></li>
                <li><a class="btn inverse" href="#">Semper hendrerit</a></li>
              </ul>
            </footer>
          </article>
        </li>
      </ul>
    </div>
  </div>
</div>
-->
<!-- Box Box Menu 
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <ul class="nospace group services">
      <li class="one_third first">
        <article>
          <h6 class="heading font-x3">Nibh justo vivamus pulvinar</h6>
          <p>Non nisi vehicula at interdum et malesuada fames ac ante ipsum primis in faucibus integer in arcu faucibus eleifend [&hellip;]</p>
          <footer><a class="btn" href="#">Purus velit</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article class="bgded overlay" style="background-image:url('images/demo/320x340.png');">
          <div class="txtwrap"><i class="block fa fa-4x fa-ioxhost"></i>
            <h6 class="heading">Lobortis</h6>
            <p>Sed tincidunt est mauris tempus libero ut viverra nam lacinia dolor [&hellip;]</p>
            <footer><a href="#">More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="bgded overlay" style="background-image:url('images/demo/320x340.png');">
          <div class="txtwrap active"><i class="block fa fa-4x fa-joomla"></i>
            <h6 class="heading">Faucibus</h6>
            <p>Vitae iaculis id leo nec nulla laoreet feugiat cras enim metus ut id felis duis [&hellip;]</p>
            <footer><a href="#">More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third first">
        <article class="bgded overlay" style="background-image:url('images/demo/320x340.png');">
          <div class="txtwrap"><i class="block fa fa-4x fa-jsfiddle"></i>
            <h6 class="heading">Venenatis</h6>
            <p>Pharetra sed felis vivamus in nulla varius mauris vitae semper justo [&hellip;]</p>
            <footer><a href="#">More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="bgded overlay" style="background-image:url('images/demo/320x340.png');">
          <div class="txtwrap"><i class="block fa fa-4x fa-language"></i>
            <h6 class="heading">Sollicitudin</h6>
            <p>Elementum interdum odio morbi quam turpis tincidunt in ipsum commodo [&hellip;]</p>
            <footer><a href="#">More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="bgded overlay" style="background-image:url('images/demo/320x340.png');">
          <div class="txtwrap"><i class="block fa fa-4x fa-lastfm"></i>
            <h6 class="heading">Vestibulum</h6>
            <p>Scelerisque odio praesent a purus vel nulla semper interdum ut eget [&hellip;]</p>
            <footer><a href="#">More &raquo;</a></footer>
          </div>
        </article>
      </li>
    </ul>
   <div class="clear"></div>
  </main>
</div>
-->
<!-- Read More
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <section class="hoc container clear"> 
    <div class="sectiontitle center">
      <h3 class="heading">Laoreet lobortis pharetra</h3>
      <p>Velit ac dapibus gravida tortor magna semper justo sed aliquet.</p>
    </div>
    <ul class="nospace group center">
      <li class="one_third first">
        <article><a href="#"><i class="btmspace-30 icon fa fa-leaf"></i></a>
          <h6 class="heading font-x1">Curabitur ultricies</h6>
          <p>Ligula mattis arcu dignissim non malesuada libero tempor morbi tempus ex non quam porta ut vehicula elit aliquam [&hellip;]</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="btmspace-30 icon fa fa-leanpub"></i></a>
          <h6 class="heading font-x1">Hendrerit dapibus</h6>
          <p>Nec massa vel risus euismod feugiat suscipit urna vitae vulputate efficitur magna lacus efficitur vulputate [&hellip;]</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="btmspace-30 icon fa fa-anchor"></i></a>
          <h6 class="heading font-x1">Phasellus finibus</h6>
          <p>Suscipit leo sem in lacus nullam bibendum est ut mattis tempus enim risus faucibus odio quis accumsan erat nibh [&hellip;]</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </article>
      </li>
    </ul>
  </section>
</div>
-->
<!-- Picture Picture 4x
<div class="wrapper row3">
  <section class="hoc container clear">
    <div class="sectiontitle center">
      <h6 class="heading">Vivamus eu nulla tincidunt</h6>
      <p>Sit amet nisl viverra mauris sit amet fringilla.</p>
    </div>
    <div class="group team">
      <figure class="one_quarter first"><a class="imgover" href="#"><img src="images/demo/320x320.png" alt=""></a>
        <figcaption>
          <h6 class="heading">A. Doe</h6>
          <em>Chief Executive Officer</em>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
            </ul>
          </footer>
        </figcaption>
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="images/demo/320x320.png" alt=""></a>
        <figcaption>
          <h6 class="heading">B. Doe</h6>
          <em>General Manager</em>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
            </ul>
          </footer>
        </figcaption>
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="images/demo/320x320.png" alt=""></a>
        <figcaption>
          <h6 class="heading">C. Doe</h6>
          <em>Marketing Manager</em>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
            </ul>
          </footer>
        </figcaption>
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="images/demo/320x320.png" alt=""></a>
        <figcaption>
          <h6 class="heading">D. Doe</h6>
          <em>Production Manager</em>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
            </ul>
          </footer>
        </figcaption>
      </figure>
    </div>
  </section>
</div>
-->
<!-- Church Connections 
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/04.png');">
  <section class="hoc container clear"> 
    <ul class="nospace group center">
      <li class="one_quarter first">
        <h6 class="heading font-x3">Our Clients</h6>
      </li>
      <li class="one_quarter"><i class="block btmspace-10 fa fa-4x fa-recycle"></i> Venenatis</li>
      <li class="one_quarter"><i class="block btmspace-10 fa fa-4x fa-rebel"></i> Malesuada</li>
      <li class="one_quarter"><i class="block btmspace-10 fa fa-4x fa-connectdevelop"></i> Fermentum</li>
    </ul>
  </section>
</div>
-->

<!-- Footer -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_third first">
      <h6 class="heading"><strong>CONTACT US</strong></h6>
      <ul class="nospace btmspace-30 linklist contact">
        <!-- 
		<li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li> 
		-->
        <li><i class="fa fa-phone"></i> NUMBER </li>
        <li><i class="fa fa-envelope-o"></i> EMAIL </li>
      </ul>
      <!--
	  <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
	  -->
    </div>
    <!--
	<div class="one_third">
      <h6 class="heading">Elit eros congue nunc</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Curabitur lacinia neque</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">Purus eget luctus rutrum ex quam semper libero lectus mauris eget [&hellip;]</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Non molestie pulvinar</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">Quam ut arcu tristique est accumsan pretium nulla ut ullamcorper [&hellip;]</p>
          </article>
        </li>
      </ul>
    </div>
	-->
<!-- Login Register
	<div class="one_third">
      <h6 class="heading">Log In</h6>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <fieldset>
          <input class="btmspace-15" type="text" value="" placeholder="Name" name="user" required/>
          <input class="btmspace-15" type="password" value="" placeholder="Password" name="pass" required/>
          <button type="submit" name="btnlogin" value="Log In">Submit</button>
        </fieldset>
      </form>
    </div>
	<div class="one_third">
      <h6 class="heading">Register</h6>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <fieldset>
          <input class="btmspace-15" type="text" value="" placeholder="Name" name="user" required/>
          <input class="btmspace-15" type="password" value="" placeholder="Password" name="pass" required/>
          <button type="submit" name="btnlogin" value="Log In"><a href="register.php">Register</a></button>
        </fieldset>
      </form>
    </div>
  </footer>
</div>
-->
<!-- Credits
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
-->

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>

</body>
</html>

<!-- DATABASE CONNECTION -->
<?php
if(isset($_POST['btnlogin']))
{
$user= $_POST['user'];
$pass= $_POST['pass'];

$sel_query = "select username, password from user where username = '$user' and password = '$pass'";
	$sel_result = mysql_query($sel_query) or die(mysql_error());
	$row=mysql_fetch_array($sel_result);
	$exist = mysql_num_rows($sel_result);
		if($exist > 0)
			{
				$_SESSION['user'] = $row['username'];
				header('location:home.php');	
			}
		else
			{
				echo"<script language='javascript'> window.alert('Username and Password not matched!');";
				echo"</script>";
			}			
} 
?>

