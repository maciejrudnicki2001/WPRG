<form action="#" method="post" >
    </br></br>
    Rozpoczecie: <input type="date" name="beg"></br>
    Zakonczenie: <input type="date" name="end"></br>
    Ilosc os: <input type="number" name="how_many"></br>
	Imie: <input type="text" name="name"></br>
	Nazwisko: <input type="text" name="surname"></br>
	Adres: <input type="text" name="adres"></br>
	Numer Rachunku: <input type="number" name="card_num"></br>
	E-mail: <input type="email" name="E-mail"></br>
	Dodatkowe Wymagania: <input type="text" name="other"></br>
	<p>Czy potrzeba łożka dla dziecka ?</p>


<div>
  <input type="checkbox" value="Yes" name="bed"
         checked>
  <label for="Tak">Tak</label>
</div>
<div>
  <input type="checkbox" value="No" name="bed">
  <label for="Nie">Nie</label>
</div>


    <button type="submit" name="button" formmethod="post">Wyślij</button>

</form>
<?php
if (isset($_POST['button']))
{
    if (isset($_POST['beg'])&&isset($_POST['end'])&&isset($_POST['how_many'])&&isset($_POST['name'])&&isset($_POST['surname'])&&isset($_POST['adres'])&&isset($_POST['card_num'])&&isset($_POST['E-mail'])&&isset($_POST['other'])&&isset($_POST['bed']))
    {
        if ($_POST['beg']<$_POST['end'])
        {
            echo ($_POST['beg']),"</br>",($_POST['end']),"</br>",($_POST['how_many']),"</br>",($_POST['name']),"</br>",($_POST['surname']),"</br>",($_POST['adres']),"</br>",($_POST['card_num']),"</br>",($_POST['E-mail']),"</br>",($_POST['other']);

		}	
    }
}
  $file_open = fopen("contact_data.csv", "a");
  $no_rows = count(file("contact_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $beg = $_POST["beg"];
  $end = $_POST["end"];
  $how_many = $_POST["how_many"];
  $name = $_POST["name"];
  $surname =  $_POST["surname"];
  $adres =  $_POST["adres"];
  $card_num = $_POST["card_num"];
  $mail = $_POST["E-mail"];
  $other = $_POST["other"];
  $form_data = array(
   'beg'  => $beg,
   'end'  => $end,
   'how_many'  => $how_many,
   'name' => $name,
   'surname' => $surname,
    'adres' => $adres,
	'card_num' => $card_num,
	'E-mail' => $mail,
	'other' => $other
  );
  fputcsv($file_open, $form_data);

?>