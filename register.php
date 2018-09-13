<html>

<head>
<?php include"dbcon/mydbconn.php";?>
<title>LORIMI</title> <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top" onLoad="changeHashOnLoad(); " >

<!-- Top -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
  
<!-- L&R -->
    <div class="fl_left">
      <ul>
	    <li><a href="index.php"><i class="fa fa-lg fa-home"></i></a></li>
		<li><a href="login.php">Login</a></li>
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
  <br><h1>Register</h1> 
   <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
	 <strong> 
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
			<table width="300px" bgcolor="#a9620d" cellpadding="10px" cellspacing="10px">
				<tr><td>Username</td><td><input type="text" name="user" required/></td></tr>
				<tr><td>Password</td><td><input type="text" name="pass" required/></td></tr>
				<tr><td>Fullname</td><td><input type="text" name="funm" required/></td></tr>
				<!-- User Type
				<tr><td>Usertype</td>
					<td>
						<select name="type" required>
						<option></option>
						<option>Pastor</option>
						<option>Leader</option>
						<option>Team</option>
						<option>Member</option>
						</select>
					</td>
				</tr>
				-->
			</table>
			<input type="submit" name="btnregister" value="Register"/><br><br>
		</form>
	 </strong> 
	</footer>
   </div>
 </div>
</div>

</body>
</html>

<?php
if(isset($_POST['btnregister']))
{
$user= $_POST['user'];
$pass= $_POST['pass'];
$funm= $_POST['funm'];
/*$type= $_POST['type'];*/

$sel_query = "select username, password from user where username = '$user' and password = '$pass'";
		$sel_result = mysql_query($sel_query) or die(mysql_error());
		$exist = mysql_num_rows($sel_result);
		
		if($exist > 0)
			{
				echo"<script language='javascript'> window.alert('Account Already Exist!');";
				echo"</script>";
			}
			
			else
			{
				/*$query = "insert into user (username,password,funm,usertype) 
									values ('$user', '$pass', '$funm', '$type')";*/
				$query = "insert into user (username,password,funm) 
									values ('$user', '$pass', '$funm')";
				$_SESSION['user'] = $row['username'];
				header('location:index.php');
				$result = mysql_query($query) or die(mysql_error());
						echo"<script language='javascript'>window.confirm('Successfully register')";
						echo"</script>";	
			}			

} 
	
?>