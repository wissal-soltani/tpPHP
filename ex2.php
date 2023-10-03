<?php
$nom="wasla";
if(in_array($nom[0],['a','e','i','u','y','o'])){
    echo($nom."commence par une voyelle");
}
else {
    echo($nom."commence par une cosonne.<br>");
    
}
$fruits=array();//declaration
$fruits=["pomme","poire","orange"];//affectation
echo($fruits[1]);



?>