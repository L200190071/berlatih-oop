<?php 

require "animal.php";
require "frog.php";
require "ape.php";

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>" . $sheep->legs; // 2
echo "<br>" . $sheep->cold_blooded; // false
/* Menampilkan false : 
echo "<br>";
echo var_dump($sheep->cold_blooded);
*/
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

$sungokong = new Ape("kera sakti");
echo "<br>" . $sungokong->getName();
echo "<br>" . $sungokong->getYell(); // "Auooo"

$kodok = new Frog("buduk");
echo "<br>" . $kodok->getName();
echo "<br>" . $kodok->getJump(); // "hop hop"
echo $kodok->legs;
 ?>