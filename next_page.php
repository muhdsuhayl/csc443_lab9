<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
echo "<html>";

$myLogin = $_SESSION["myLogin"];
echo "Value of myLogin has been retrieved: ".$myLogin. "<br>";

$myColor = $_SESSION["myColor"];
echo "Value of MyColor has been retrieved: ".$myColor."<br>";

echo "</html>\n";

?>
</body>
</html>