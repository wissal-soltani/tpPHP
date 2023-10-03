<?php
$a=3.14;
$b=3.14;
$res=$a<=>$b;
switch($res){
    case -1:echo "$a est inferieur a $b";
    break;
    case 0:echo"$a egale a $b";
    break;
    case 1:echo"$a est superieur a $b";
    break;
}
?>