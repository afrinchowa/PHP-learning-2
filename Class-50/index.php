<?php
// nullable type
declare(strict_types=1);
// function print_my_name(string|null $full_name)
// function print_my_name(?string $full_name){
//     echo $full_name;
function print_my_name(?string $full_name) : ?string{
   return $full_name;

}
$name = null;
$printed_name print_my_name($name);
echo $printed_name;
?>