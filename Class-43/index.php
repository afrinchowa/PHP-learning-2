<?php
// named argument

// function full_name($first_name ,$last_name){
//     echo $first_name . ' ' . $last_name;

// }
// full_name(last_name: "Chowa" , first_name:"Arfin");
 ?>
<?php
// named argument

function full_details($first_name ,$last_name,$address= "", $pin= "", $phone=""){
    echo "$first_name $last_name $address $pin $phone";

}
full_details(last_name: "Chowa" , first_name:"Arfin" ,phone: "0123456");
?>