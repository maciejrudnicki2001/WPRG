<?php
   
    if (isset($_POST['login']))
    {	
		require "db_connect.php";
        $query = "SELECT * FROM `user` WHERE `Login` = '".$_POST['login']."'";
        $result = mysqli_query($con,$query);
        if ($result){
            $rows = mysqli_num_rows($result);
            if ($rows == 1){
                $assoc = mysqli_fetch_assoc($result);
                $password = $assoc['Password'];
                echo $password;
                if ($password == $_POST['haslo1']){
                    session_start();
                    $_SESSION["user_name"] = $assoc["Login"];
                    header("Location: index.php");
                }
                else{
                    setcookie('user_name', "Źle podane hasło", -1, '/');
                    header("Location: login.php");
                   }
            } 
            else{
                setcookie('user_name', "Źle podany użytkownik", -1, '/');
                header("Location: login.php");
               }
        }
        else{
         setcookie('user_name', "Błąd bazy danych", -1, '/');
         header("Location: login.php");
        }
	}
    else{
    header("Location: login.php");
    }

?>