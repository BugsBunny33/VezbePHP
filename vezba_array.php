<?php
$niz=array(1,2,3);
echo $niz[0];

$asocijativni=array(
		'ime'=>"dusan",
		'prezime'=>"caldovic",
		'godiste'=>1981
);
$asocijativni['mesto']='Sarajevo';
$probni_niz=[3,4,5];
echo "</br>".$probni_niz['0'];
echo "</br>".$asocijativni['prezime'];
echo "</br>".$asocijativni['mesto'];
echo "</br>".$asocijativni;

if (array_key_exists('ime', $asocijativni)){
	echo "Postoji";
}
else {
	echo "Ne postoji!";
}

extract($asocijativni);
echo "</br>".$ime;

$lista_ljudi=array(
		'Marko'=>33,
		'Dusan'=>34,
		'Petar'=>35,
		'Nikola'=>36		
);
reset($lista_ljudi);
echo "<table>";
foreach ( $lista_ljudi as $kljuc => $vrednost){
	echo "<tr><td>{$kljuc}</td>><td>{$vrednost}</td></tr>";	
}
echo "</table>";
?>