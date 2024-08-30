<?php
declare(strict_types=1);
$user_data=["Moriom", "Afrin", 200,true,45.546];
// $userName= $user_data[1];
// echo $userName;
dump_arr($user_data);
print_arr($user_data);

function dump_arr(array $arr) : void{
echo "<pre>";
var_dump($arr);
echo "</pre>";
}

function print_arr(array $arr ) :void {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    
}
?>