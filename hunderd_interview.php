<?php
$a=3; $b=7; 
echo "</br>"."tu sam"."<br />"."$a+$b";

$teks= <<< doovde
</br>ja samo hocu
malo vide da pricam </br>
i ne znam sta ce mi </br>
ovoliko teksta </br>
doovde;

echo $teks;

print "Ja sam print";

$proni="pobroj me";

for ($brojac=0;$brojac<strlen($proni);$brojac++){
	printf("Redni broj je %d karakter %s\n"."</br>", $brojac, $proni[$brojac]);
}

$message = "p";
$$message = "z";

echo $message;
echo "</br>";
echo $$message;
echo "</br>";
echo $p;

$proba="ana voli milovana <p>";
$string=htmlentities($proba, ENT_QUOTES);
echo "</br>".$string;

$string=htmlspecialchars($proba);
echo "</br>".$string;



$tex="programiranije";
$enkod=urlencode($tex);
echo "http://www.examples.com/{$enkod}";

$samometa=get_meta_tags('https://www.example.com');
echo "</br>";
print_r($samometa);

?>