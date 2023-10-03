<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verification</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="saisir n" name="champ">
        <input type="submit" name="verif" value="verifier" >
        <?php
        if (isset($_POST["verif"])){
            $n=$_POST["champ"];
            if($n%2==0){
                echo"$n est pair";

            }else{
                echo"$n n'est pas pair";
            }
        }
        
        ?>
    </form>
</body>
</html>