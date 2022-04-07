<?php
mb_internal_encoding('UTF-8');
if(
count($_REQUEST) == 3 and
(isset($_REQUEST[1]) and strlen($_REQUEST[1]) > 0) and
(isset($_REQUEST[2]) and strlen($_REQUEST[2]) > 0) and
(isset($_REQUEST[3]) and strlen($_REQUEST[3]) > 0)
) {
sort($_REQUEST);
if(pow($_REQUEST[2], 2) == (pow($_REQUEST[0], 2)) + pow($_REQUEST[1], 2)) {
echo implode(', ', $_REQUEST)." - тройка Пифагора";
}
else echo "Числа: ".implode(', ', $_REQUEST)." не являются тройкой Пифагора";
}
else echo "Поля не могут быть пустыми.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="main.php" method="GET">
<input type="text" name="1"><br><br>
<input type="text" name="2"><br><br>
<input type="text" name="3"><br><br>
<input type="submit" name="">
</form>
</body>