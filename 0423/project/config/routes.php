<?php
	use \Core\Route;

	return [
		new Route('/my-page1/', 'test', 'act1'),
		new Route('/my-page2/', 'test', 'act2'),
		new Route('/my-page3/', 'test', 'act3'),
		new Route('/nums/:n1/:n2/:n3/', 'num', 'sum'),
	];
?>
