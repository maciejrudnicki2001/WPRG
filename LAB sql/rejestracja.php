<?php
     echo "jd";  

   
    if (isset($_POST['rejestruj']))
    {	
		$con = mysqli_connect("localhost","postgres","nie_podam_sory","postgres","5432");
		$quer = mysqli_query($con,"SELECT * FROM uzytkownicy") or die("Nie połączyło mordo");
	}

	while ($row = mysqli_fetch_assoc($result)) {
		echo($row["login"] + $row["haslo"]);
}
?>