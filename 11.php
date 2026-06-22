<!DOCTYPE html>
<html>
<head>
    <title>Store Information</title>
</head>
<body>

<form method="post">

<h2>Information:</h2>

<textarea name="info" rows="15" cols="70"></textarea>
<br><br>

<input type="submit" value="Submit">
<input type="reset" value="Reset">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $info=$_POST["info"];

    // Store into text file
    file_put_contents("info.txt",$info);

    echo "<h1>Saved Information</h1>";

    // Read and display file contents
    echo nl2br(file_get_contents("info.txt"));
}

?>

</body>
</html>