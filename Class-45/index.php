<?php
// global scope

$test_var= "Test";

function my_name(){
    global $test_var;
    global $my_name;
    $my_name="Chowa";
    echo $test_var;
}
my_name();

echo $test_var;
echo $my_name;

?>