<?php



if (isset($_POST['send']))
{
	echo "Liczba gości:" .$_COOKIE['how_many_people'];
}

else
{
	header("Location: index.php");
}