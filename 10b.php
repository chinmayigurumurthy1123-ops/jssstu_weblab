<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h2>Enter a number to check</h2>
        <input type="number" name="number" required><br><br>
        <input type="submit" value="check">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $n=$_POST["number"];
            if($n<2)
                echo "$n is not a prime number";
        else{
           $flag=0;
            for($i=2;$i<=$n/2;$i++){
                if($n%$i==0){
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            echo "$n is a prime number";
            else
            echo "$n is not a prime number";
        }
        }
        ?>
</body>
</html>