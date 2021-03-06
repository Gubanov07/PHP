<?php 
header('Content-Type: text/html; charset=utf-8');
require_once 'student.php';
require_once 'group.php';
require_once 'discipline.php';
require_once 'teacher.php';

function loadStudents($group, $path) {
	$file = nl2br(file_get_contents($path));
	$students = explode('<br />', $file);
	foreach ($students as $s) {
		$tmp = explode(';', $s);
		$surname = $tmp[0];
		$name = $tmp[1];
		$patr = $tmp[2];
		new Student($name, $surname, $patr, $group);
	}
}

$g1 = new Group(1, 'И-01');
$g2 = new Group(1, 'И-02');
$g3 = new Group(1, 'И-03');

$d1 = new Discipline(1,'Прикладное программное обемпичение');
$d2 = new Discipline(2,'Оператор электорнных вичеслений и систем машин');
$d3 = new Discipline(3,'Элементы высшей математики');
$d4 = new Discipline(4,'Основы програмирования');

$g3->addDiscipline($d1);
$g3->addDiscipline($d2);
$g3->addDiscipline($d3);
$g3->addDiscipline($d4);

loadStudents($g3, 'i03.txt');
//$g3->display();

$t1 = new Teacher('Рустам', 'Сафаров', 'Ахтамович');
$t2 = new Teacher('Юлия', 'Черепонова', 'Сергеевна');

$t2->addDiscipline($d1);
$t2->addDiscipline($d4);
$t2->display();
?>