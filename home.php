<!DOCTYPE html>
<html>
<head>
<title>Projeto WEB</title>
</head>
<body>
<b>Projeto WEB</b> <br><br>
<?php
date_default_timezone_set("America/Sao_Paulo");
echo "Hoje é " . date("d-m-Y") . "<br>"; 
echo "O horário é " . date("h:i:s A") . "<br>";
echo "Número aleatório 1: " . rand(100, 500) . "<br>";
echo "Número aleatório 2: " . rand(501, 999) . "<br>";
echo "Número aleatório 3: " . rand(-999, -100) . "<br>";
?>
</body>
</html>
