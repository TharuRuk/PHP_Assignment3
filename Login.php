<html>
<head>
<title>Assignment</title>
</head>

<body>
<form action="Login.php" method="post" name="frm">
<input name="uname" type="text" placeholder="User Name" /><br /><br />
<input name="pass" type="password" placeholder="Password" /><br /><br />
<input name="submit" type="submit" value="submit" />
</form>

</body>
</html>
<?php if(isset($_SESSION['loggedAt'])) { header('welcome.php'); } 
if(isset($_POST['submit'])) { $name=$_POST['uname']; $pass=$_POST['pass']; 
if($name=="admin" & $pass=="1234") { 
session_Start(); $_SESSION['username']=$name;
 $_SESSION['loggedAt']=time();
 header('location:welcome.php'); 
 }
}
