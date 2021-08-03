<?php
if (isset($_COOKIE['user_name'])) {
    echo $_COOKIE["user_name"];
    setcookie("user_name", "", time() - 3600); 
    }
?>

<form method="POST" action="register.php">
    <b>Login:</b> <input type="text" name="login" required><br><br>
    <b>Hasło:</b> <input type="password" name="haslo1" required><br>
    <input type="submit" value="Utwórz konto" name="rejestruj">
</form>