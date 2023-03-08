<?php

//stringi
$firstname ="Janusz";
$surname = "Nowak";
echo "Imie i nazwisko: $firstname, $surname<br>";
echo 'Imie i nazwisko: $firstname, $surname<br>';

echo <<< DATA
	<br>
	Imie: $firstname<br>
	Nazwisko: $surname<br>
DATA;


$data = <<< 'DATA'
	<br>
	Imie: $firstname<br>
	Nazwisko: $surname<br>
DATA;

echo $data;


//systemy liczbowe

$bin = 0b1011;
echo $bin;

$oct = 011;
echo $oct;

$hex = 0xA1;
echo $hex;

?>