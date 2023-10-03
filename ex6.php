<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
</head>
<body>
<form  method="post">
<input type= " text " name="op1" > +
<input type= " text " name="op2">
<input type="submit" value="calculer" name="calcul">
<br>

<?php
if(isset($_POST['calcul'])){
$op1=$_POST["op1"];
$op2=$_POST["op2"];
$som=$op1+$op2;
echo"Le resultat est ".$som;
}
?>

</form>
</body>
</html>