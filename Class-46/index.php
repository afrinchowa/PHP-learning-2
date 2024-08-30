<?php
// static scope

$test_var= "Test";

function order_count(){
static $count =0;
$count++;
echo $count . "<br>";

}
order_count();
order_count();
order_count();

?>