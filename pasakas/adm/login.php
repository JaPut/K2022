<?php session_start(); 

	if(isset($_POST['Submit'])){
	
		$logins = array('JP' => 'Madonas25','reksis' =>'reksis','username1' => 'password1','username2' => 'password2');
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
		
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:indexadm.php");
			exit;
		} else {
				$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mindOfSpace admin</title>
<link href="../css/loginstyle.css" rel="stylesheet">
</head>
<body>
<div id="Frame0">
  <h1 style="text-align:center">Never take life seriously. Nobody gets out alive anyway. </h1>
  <p><a href="http://www.meteo.lv/">Laika ziņas</a></p>
  <a href="../index.html">Click here</a> to WEB_page. 
</div>
<br>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>

    </tr>
  </table>
</form>

</body>
</html>