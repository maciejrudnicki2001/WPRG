<?php
// zrobione przez Maciej Rudnicki, Piotr Wiktorczyk i Bartosz Wołodźko
function wygrana($tablica)
{

    for ($i=0;$i<3;$i++)
    {
        if (($tablica[$i][0] == $tablica[$i][1]) && ($tablica[$i][0]==$tablica[$i][2])&&($tablica[$i][0]!="&nbsp"))
        {
            session_destroy();
            return "Wygrał ".$tablica[$i][0];
        }

    }
    for ($i=0;$i<3;$i++)
    {
        if (($tablica[0][$i] == $tablica[1][$i]) && ($tablica[0][$i]==$tablica[2][$i])&&($tablica[0][$i]!="&nbsp"))
        {
            session_destroy();
            return "Wygrał ".$tablica[0][$i];
        }

    }
    if ((($tablica[0][0]==$tablica[1][1])&&($tablica[0][0]==$tablica[2][2])&&($tablica[0][0]!="&nbsp"))||(($tablica[0][2]==$tablica[1][1])&&($tablica[0][2]==$tablica[2][0])&&($tablica[2][0]!="&nbsp")))
    {
        session_destroy();
        return "Wygrał ".$tablica[1][1];
    }

}
session_start(); // zaczyna sesje
if (!isset($_SESSION['tablica'])) //jezeli nie istnieje zmienna w sesji to zrob
{
    $_SESSION['tablica'] = array
    (
        array("&nbsp","&nbsp","&nbsp"),
        array("&nbsp","&nbsp","&nbsp"),
        array("&nbsp","&nbsp","&nbsp")
    );

    $_SESSION['kolejka']=0;
}

if(isset($_POST['button'])) // wykonuje sie po wcisnieciu inputa
{
    if (!empty($_POST['Kolumna']))
    {
        if (!empty($_POST['Wiersz'])) 
        {
            $wiersz = $_POST['Wiersz']-1;
            $kolumna = $_POST['Kolumna']-1;
            if ($_SESSION['tablica'][$wiersz][$kolumna]=="&nbsp")
            {
                if ($_SESSION['kolejka']%2==0)
                {
                    $_SESSION['tablica'][$wiersz][$kolumna]="O";
                    $_SESSION['kolejka']++;
                }
                else
                {
                    $_SESSION['tablica'][$wiersz][$kolumna]="X";
                    $_SESSION['kolejka']++;
                }
                echo wygrana($_SESSION['tablica']);
            }
        }
    }
}
echo "<table border='solid'>";
for ($i=0; $i<3;$i++)
{
    echo "<tr>";
    for ($j=0;$j<3;$j++)
    {
        echo "<td>".$_SESSION['tablica'][$i][$j]."</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
<form action="#" method="post">
    Wiersz: <input type="number" name="Wiersz" min="1" max="3"><br>
Kolumna: <input type="number" name="Kolumna" min="1" max="3"><br>
    <button type="submit" name="button" formmethod="post">Wyślij</button>
</form>
