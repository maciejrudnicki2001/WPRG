<html>
<head>
<style>
    .logowanie{
        color: white;
    }
    .boarder{
        border-right: 1px solid white;
    }
    .boarder1{
        border-right: 1px solid white;
        border-left: 1px solid white;
    }
    
    a{
        color: white;
        text-decoration: none;
        
    }
    header{
        background-image: url("images/music_cent.png");
        background-repeat: no-repeat;
        background-position: center;
        background-color: black;
        height: 540px;
    }
</style>
</head>
<body>
    <header>
        <div class = "logowanie" align="right"> 
        <?php 
            session_start();
            if (isset($_SESSION["user_name"])){
                ?>
                
                Witaj
                <?php
                echo $_SESSION["user_name"];
                ?>
                
                <a href="acc_edit.php" class="boarder1">Edytuj Dane Konta </a>
                <a href="log_out.php" class="boarder">Wyloguj</a> <br>
                                                                                                                                                                                            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="boarder"> Proszę tego nie Klikać </a>
                
                <?php
                }
            else{
        ?>
        <a href="login.php" class="boarder">Logowanie </a>    

        <a href="rejestracja.php">Zarejestruj Się </a>
        <?php
            }
            ?>
        </div>
    </header>
</body>
</html>