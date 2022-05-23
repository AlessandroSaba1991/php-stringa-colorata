<?php 
/* 
Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET.
*/

$elements = $_GET;
foreach($elements as $key => $value){
    echo $key . ": " . $value . "<br>" ;
}


?>