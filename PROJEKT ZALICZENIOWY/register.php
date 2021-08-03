<?php
   
    if (isset($_POST['rejestruj']))
    {	
		require "db_connect.php";
        $query = "INSERT INTO `user`(`Login`, `Password`) VALUES ('".$_POST['login']."','".$_POST['haslo1']."')";
        $result = mysqli_query($con,$query);
        if ($result){
            header("Location: login.php");
            setcookie('user_name', "Zarejestrowałeś się", -1, '/');
        }
        else{
            setcookie('user_name', "Błąd wpisywania do bazy danych", -1, '/');
            header("Location: rejestracja.php");
        }
	}
    else{
        header("Location: rejestracja.php");
    }

?>