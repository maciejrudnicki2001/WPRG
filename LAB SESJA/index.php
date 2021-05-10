
<?php session_start(); ?>
<html>
<head>
<title>Login i hasło to "1234"</title>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
</head>
<body>

<?php
if(isSet($_SESSION['user']))

{
 header('Location:zapis.php');

  
}
else{
?>
<form method='POST' action='sprawdz.php'>
<table>
<tr><th align="right">Login:</th><td align="left"><input type='text' name='login'></td></tr>
<tr><th align="right">Hasło:</th><td align="left"><input type='password' name='haslo'></td></tr>
<tr><td align="center" colspan="2"><input type='submit' value='Wyślij' name='logowanie'></td></tr>
</table>
</form>
<?php
}
?>
</body>
</html>
