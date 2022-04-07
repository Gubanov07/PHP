<?php
mb_internal_encoding('UTF-8');
	function discriminant($a, $b, $c) {
		$d = pow($b, 2) - 4 * $a * $c;
		return $d;
}
	function root_1($a, $b, $d) {
		$x_1 = (-$b + sqrt($d))/(2 * $a);
		return $x_1;
}
	function root_2($a, $b, $d) {
		$x_1 = (-$b - sqrt($d))/(2 * $a);
		return $x_1;
}
if(!empty($_REQUEST)) {
if(count($_REQUEST) == 3 and $_REQUEST['a'] != 0 and $_REQUEST['b'] != 0 and $_REQUEST['c'] !=
0) {
$discriminant = discriminant($_REQUEST['a'], $_REQUEST['b'], $_REQUEST['c']);
if($discriminant > 0) {
echo "Корень уравнения 1: ".root_1($_REQUEST['a'], $_REQUEST['b'], $discriminant).'<br>';
echo "Корень уравнения 2: ".root_2($_REQUEST['a'], $_REQUEST['b'], $discriminant);
}
if($discriminant == 0) {
echo "Корень уравнения: ".root_1($_REQUEST['a'], $_REQUEST['b'], $discriminant);
}
if($discriminant < 0) {
echo "Уравнение не имеет корней.";
}}
else echo "Поле не может быть пустым или равным нулю!";
}
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
<input type="text" name="a" placeholder="Введите коэффициент 'a'"><br><br>
<input type="text" name="b" placeholder="Введите коэффициент 'b'"><br><br>
<input type="text" name="c" placeholder="Введите коэффициент 'c'"><br><br><input type="submit" name="">
</form>
</body>