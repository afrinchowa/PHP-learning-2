<?php
//call by value and call by reference

declare(strict_types=1);

function getMyName(string &$name) : void {
    $name ="Raj";
    echo $name;
}

$my_name = "Arfin chowa";
getMyName($my_name);

echo "<br>";

echo $my_name;
?>