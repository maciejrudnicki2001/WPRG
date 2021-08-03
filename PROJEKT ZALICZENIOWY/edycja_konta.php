<?php
   
    if (isset($_POST['submit']))
    {	
		require "db_connect.php";
        session_start();
            if (isset($_SESSION["user_name"])){
                    $query = "UPDATE `user` SET`Adress`='".$_POST['addres']."',`PhoneNumber`='".$_POST['phone_number']."' WHERE Login = $_SESSION[user_name]";
                    $result = mysqli_query($con,$query);
                    if ($result){}
                    $file_open = fopen("Users.csv","a");
                    $no_rows = count(file("Users.csv"));
                    if($no_rows > 1){
                        $no_rows = ($no_rows -1) + 1;
                    }
                    $addres = $_POST['addres'];
                    $phone_number = $_POST['phone_number'];
                    $form_data = array(
                        'addres' => $addres,
                        'phone_number' => $phone_number
                    );
                    fputcsv($file_open, $form_data);

                    header("Location: index.php");
                }
            else{
                setcookie('user_name',"Błąd wpisywania do bazy danych", -1, '/');
                header("Location: acc_edit.php");
            }
        }
?>