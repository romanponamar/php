<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Основы программирования</h1>
	<h2>Константы</h2>
	
	<?php

        const arr = ["The Dark Side of The Moon","Pink Floyd","17 марта 1973","Harvest, Capitol, EMI","LP, кассета, CD, SACD","Платиновый (USA), Платиновый(GBR)"];
		// набор переменных сценария
		$album = "The Dark Side of The Moon";
		$team = "Pink Floyd";
		$data = "17 марта 1973";
		$label = "Harvest, Capitol, EMI";
		$format = "LP, кассета, CD, SACD";
		$status = "Платиновый (USA), Платиновый(GBR)";

        echo '<pre>';
        print_r(arr);
        echo '</pre>';

	?>
		

</body>
</html>