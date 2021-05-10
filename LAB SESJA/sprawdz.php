<?php session_start(); include("config.php"); ?>
<html>
<head>
<title>Login i hasło to "1234</title>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
</head>
<body>

<?php
if($_POST['logowanie']){
  $wys_login = htmlspecialchars($_POST['login']);
  $wys_pass = htmlspecialchars($_POST['haslo']);
  if($wys_login == $login && $wys_pass == $pass){
    $_SESSION['user'] = $login;
  }
}
else {
	echo "Nieprawidłowe hasło";
}
  header("Location:index.php");
?>
</body>
</html>