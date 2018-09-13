<html>
<head>
<?php session_start(); include"dbcon/mydbconn.php";?>
<title>LORIMI</title> <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body  id="top" onLoad="changeHashOnLoad(); " > 

<!-- Top -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
  
<!-- L&R -->
    <div class="fl_left">
      <ul>
	    <li><a href="index.php"><i class="fa fa-lg fa-home"></i></a></li>
		<li><a href="register.php">Register</a></li>
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

<!-- Form -->
<div class="wrapper coloured overlay bgded" style="background-image:url('');">
 <div id="testimonial">
  <br><h1>Log In</h1>
   <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
	 <strong> 
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
			<table width="300px" bgcolor="#a9620d" cellpadding="10px" cellspacing="10px"> <br><br>
				<tr><td>Username</td><td><input type="text" name="user" required/></td></tr>
				<tr><td>Password</td><td><input type="password" name="pass" required/></td></tr>
			</table>
			<input type="submit" name="btnlogin" value="Log In"/><br><br>
		</form>
	 </strong> 
	</footer>
   </div>
 </div>
</div>

</body>
</html>

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