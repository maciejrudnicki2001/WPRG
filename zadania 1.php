<?php
#zadanie pierwsze
$wynik = rand (1, 6);
echo("$wynik, tyle wynosi wynik rzutu kostką");
#zadanie drugie
echo("<br>");
echo("<br>");
$zmienna = 4;
$srednica = $zmienna*2;
echo("$srednica, tyle wynosi średnica tego koła");
#zadanie trzecie
echo("<br>");
echo("<br>");
function censorship_machine($sentence)
{
    $dictionary = array("maslo","brzydkie","slowo","czasem");
    foreach ($dictionary as $word)
    {
        $size=strlen($word);
        $censorship='';
        for ($j=0; $j<$size; $j++)
            $censorship .= '*';

        $sentence = str_replace($word,$censorship,$sentence);
    }
    return $sentence;
}
echo censorship_machine("maslo jest pyszne ale czasem wymsknie mi sie brzydkie słowo");
#zadanie czwarte
echo("<br>");
echo("<br>");
$pesel = "01260400953";
$rok = substr($pesel, 0, 2);
$miesiac = substr($pesel, 2, 2);
$dzien = substr($pesel, 4, 2);
if ($miesiac<13)
	$miesiac=$miesiac;
elseif ($miesiac<33)
{
	$miesiac=$miesiac-20;
}
elseif ($miesiac<53)
{
	$miesiac=$miesiac-40;
}
elseif ($miesiac<73)
{
	$miesiac=$miesiac-60;
}
elseif ($miesiac<93)
{
	$miesiac=$miesiac-80;
}
echo ("$dzien.$miesiac.$rok");

#zadanie piate
echo("<br>");
echo("<br>");
	function trojkat(){
		$a = 8;
		$h = 12;
		return ($a*$h)/2;
	}
	function trapez(){
		$a = 4;
		$b = 2;
		$h = 1;
		return ($b+$a)/2*$h;
	}
	function prostokat(){
		$a = 4;
		$b = 5;
		return $a*$b;
	}
	$wielokat = 3;
	switch($wielokat){
		case 1: {
			echo(trojkat());
			break;
		}
		case 2: {
			echo(trapez());
			break;
		}
		case 3: {
			echo(prostokat());
			break;
		}
	}
?>
